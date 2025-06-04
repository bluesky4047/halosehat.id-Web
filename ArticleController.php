<?php

namespace App\Http\Controllers;

use App\Models\Article; // Pastikan model Article sudah ada
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Untuk membuat slug
use Illuminate\Support\Facades\Storage; // Untuk upload dan hapus gambar

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menampilkan daftar semua artikel.
     */
    public function index()
    {
        // Ambil semua artikel, urutkan dari yang terbaru dibuat
        $articles = Article::latest()->get();

        // Mengirimkan data artikel ke view 'articlelist'
        return view('articlelist', [
            'title' => 'Daftar Artikel', // Judul halaman
            'articles' => $articles // Variabel $articles yang akan di-loop di Blade
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * Menampilkan formulir untuk membuat artikel baru.
     */
    public function create()
    {
        return view('makearticle', [
            'title' => 'Buat Artikel Baru' // Judul halaman
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * Menyimpan artikel baru ke database.
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk dari form
        $request->validate([
            'title' => 'required|string|max:255|unique:articles,title', // Judul harus unik
            'content' => 'required|string',
            'category' => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi file gambar (maks 2MB)
        ]);

        $imageUrl = null; // Inisialisasi variabel URL gambar

        // Jika ada file gambar yang diupload
        if ($request->hasFile('featured_image')) {
            // Simpan gambar di direktori 'storage/app/public/article_images'
            $imagePath = $request->file('featured_image')->store('article_images', 'public');
            // Dapatkan URL yang bisa diakses publik
            $imageUrl = Storage::url($imagePath);
        }

        // Buat entri artikel baru di database
        $article = Article::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title), // Otomatis buat slug dari judul
            'content' => $request->content,
            'category' => $request->category,
            'featured_image' => $imageUrl,
        ]);

        // Redirect pengguna ke halaman detail artikel yang baru dibuat, dengan pesan sukses
        return redirect()->route('articles.show', $article->slug)
                         ->with('success', 'Artikel berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     * Menampilkan detail satu artikel berdasarkan slug.
     */
    public function show(Article $article) // Menggunakan Route Model Binding
    {
        // Mengirimkan objek artikel tunggal ke view 'readarticle'
        return view('readarticle', [
            'title' => $article->title, // Judul halaman diambil dari judul artikel
            'article' => $article // Variabel $article yang berisi detail artikel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * Menampilkan formulir untuk mengedit artikel.
     */
    public function edit(Article $article)
    {
        return view('editarticle', [
            'title' => 'Edit Artikel: ' . $article->title,
            'article' => $article
        ]);
    }

    /**
     * Update the specified resource in storage.
     * Memperbarui artikel di database.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            // Judul harus unik kecuali untuk artikel saat ini
            'title' => 'required|string|max:255|unique:articles,title,' . $article->id,
            'content' => 'required|string',
            'category' => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageUrl = $article->featured_image; // Pertahankan gambar lama secara default

        // Jika ada gambar baru yang diupload
        if ($request->hasFile('featured_image')) {
            // Hapus gambar lama jika ada
            if ($article->featured_image) {
                Storage::disk('public')->delete(Str::after($article->featured_image, '/storage/'));
            }
            // Simpan gambar baru
            $imagePath = $request->file('featured_image')->store('article_images', 'public');
            $imageUrl = Storage::url($imagePath);
        } elseif ($request->has('remove_image')) { // Cek jika ada checkbox/input untuk menghapus gambar
            if ($article->featured_image) {
                Storage::disk('public')->delete(Str::after($article->featured_image, '/storage/'));
            }
            $imageUrl = null; // Set gambar jadi null
        }


        $article->update([
            'title' => $request->title,
            // Perbarui slug hanya jika judul berubah
            'slug' => ($request->title !== $article->title) ? Str::slug($request->title) : $article->slug,
            'content' => $request->content,
            'category' => $request->category,
            'featured_image' => $imageUrl,
        ]);

        return redirect()->route('articles.show', $article->slug)
                         ->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     * Menghapus artikel dari database.
     */
    public function destroy(Article $article)
    {
        // Hapus gambar terkait jika ada
        if ($article->featured_image) {
            Storage::disk('public')->delete(Str::after($article->featured_image, '/storage/'));
        }

        $article->delete(); // Hapus artikel dari database

        return redirect()->route('articles.index')
                         ->with('success', 'Artikel berhasil dihapus!');
    }
}