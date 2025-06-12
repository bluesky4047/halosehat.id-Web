<?php

namespace App\Http\Controllers;

use App\Models\Article; // Pastikan model Article sudah ada dan diimpor
use Illuminate\Http\Request;
use Illuminate\Support\Str; // Diperlukan untuk Str::slug() dan Str::after()
use Illuminate\Support\Facades\Storage; // Diperlukan untuk operasi file

class ArticleController extends Controller
{
    /**
     * Menampilkan daftar semua artikel.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Ambil semua artikel, diurutkan dari yang terbaru dibuat (descending)
        $articles = Article::latest()->get();

        // Mengirimkan koleksi artikel ke view 'articlelist'
        return view('articlelist', [
            'title' => 'Daftar Artikel', // Judul halaman untuk tampilan
            'articles' => $articles      // Variabel $articles yang akan di-loop di Blade
        ]);
    }

    /**
     * Menampilkan formulir untuk membuat artikel baru.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('makearticle', [
            'title' => 'Buat Artikel Baru' // Judul halaman untuk form
        ]);
    }

    /**
     * Menyimpan artikel baru ke database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Validasi data yang masuk dari form
        $request->validate([
            'title'          => 'required|string|max:255|unique:articles,title', // Judul harus unik
            'content'        => 'required|string',
            'category'       => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240', // Validasi file gambar
        ]);

        $imageUrl = null; // Inisialisasi URL gambar

        // Cek jika ada file gambar yang diunggah
        if ($request->hasFile('featured_image')) {
            // Simpan gambar ke sub-direktori 'article_images' di dalam disk 'public'
            // Path fisiknya akan: storage/app/public/article_images/namafileunik.ext
            $imagePath = $request->file('featured_image')->store('article_images', 'public');

            // Dapatkan URL yang bisa diakses publik melalui symlink 'storage'
            // URL akan: APP_URL/storage/article_images/namafileunik.ext
            $imageUrl = Storage::url($imagePath);
        }

        // Buat entri artikel baru di database
        $article = Article::create([
            'title'          => $request->title,
            'slug'           => Str::slug($request->title), // Otomatis buat slug dari judul
            'content'        => $request->content,
            'category'       => $request->category,
            'featured_image' => $imageUrl, // Simpan URL lengkap ke database
        ]);

        // Redirect pengguna ke halaman detail artikel yang baru dibuat, dengan pesan sukses
        return redirect()->route('articles.show', $article->slug)
                         ->with('success', 'Artikel berhasil dibuat!');
    }

    /**
     * Menampilkan detail satu artikel berdasarkan slug.
     *
     * @param  \App\Models\Article  $article (menggunakan Route Model Binding)
     * @return \Illuminate\View\View
     */
    public function show(Article $article)
    {
        // Mengirimkan objek artikel tunggal ke view 'readarticle'
        return view('readarticle', [
            'title'   => $article->title, // Judul halaman diambil dari judul artikel
            'article' => $article         // Variabel $article yang berisi detail artikel
        ]);
    }

    /**
     * Menampilkan formulir untuk mengedit artikel.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\View\View
     */
    public function edit(Article $article)
    {
        return view('editarticle', [
            'title'   => 'Edit Artikel: ' . $article->title,
            'article' => $article
        ]);
    }

    /**
     * Memperbarui artikel di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Article $article)
    {
        // Validasi data yang masuk dari form
        $request->validate([
            // Judul harus unik, kecuali untuk artikel yang sedang diedit (berdasarkan ID-nya)
            'title'          => 'required|string|max:255|unique:articles,title,' . $article->id,
            'content'        => 'required|string',
            'category'       => 'nullable|string|max:255',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            // 'remove_image'   => 'nullable|boolean', // Opsional: jika ada checkbox untuk menghapus gambar
        ]);

        $imageUrl = $article->featured_image; // Pertahankan URL gambar lama secara default

        // Jika ada file gambar baru yang diunggah
        if ($request->hasFile('featured_image')) {
            // Hapus gambar lama dari disk 'public' jika ada
            if ($article->featured_image) {
                // Konversi URL lengkap kembali ke path relatif untuk Storage::delete()
                // Contoh: dari 'http://localhost/storage/path/to/img.jpg' menjadi 'path/to/img.jpg'
                $oldImagePath = Str::after($article->featured_image, '/storage/');
                Storage::disk('public')->delete($oldImagePath);
            }
            // Simpan gambar baru
            $imagePath = $request->file('featured_image')->store('article_images', 'public');
            $imageUrl = Storage::url($imagePath); // Dapatkan URL publik untuk gambar baru
        }
        // Kondisi jika ada opsi (misal checkbox) untuk menghapus gambar tanpa mengunggah yang baru
        elseif ($request->has('remove_image') && $request->boolean('remove_image')) {
            if ($article->featured_image) {
                $oldImagePath = Str::after($article->featured_image, '/storage/');
                Storage::disk('public')->delete($oldImagePath);
            }
            $imageUrl = null; // Set URL gambar jadi null di database
        }


        // Perbarui entri artikel di database
        $article->update([
            'title'          => $request->title,
            // Perbarui slug hanya jika judul berubah, jika tidak gunakan slug lama
            'slug'           => ($request->title !== $article->title) ? Str::slug($request->title) : $article->slug,
            'content'        => $request->content,
            'category'       => $request->category,
            'featured_image' => $imageUrl,
        ]);

        // Redirect pengguna ke halaman detail artikel yang diperbarui, dengan pesan sukses
        return redirect()->route('articles.show', $article->slug)
                         ->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Menghapus artikel dari database.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Article $article)
    {
        // Hapus gambar terkait dari disk 'public' jika ada
        if ($article->featured_image) {
            $oldImagePath = Str::after($article->featured_image, '/storage/');
            Storage::disk('public')->delete($oldImagePath);
        }

        $article->delete(); // Hapus artikel dari database

        // Redirect pengguna ke halaman daftar artikel dengan pesan sukses
        return redirect()->route('articles.index')
                         ->with('success', 'Artikel berhasil dihapus!');
    }
}