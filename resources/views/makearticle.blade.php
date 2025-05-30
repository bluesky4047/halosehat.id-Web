<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Main Content -->
    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <form id="articleForm" class="space-y-8" enctype="multipart/form-data">
            @csrf
            
            <!-- Article Title -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <label for="title" class="block text-sm font-semibold text-gray-900 mb-3">
                    Judul Artikel
                    <span class="text-red-500">*</span>
                </label>
                <input 
                    type="text" 
                    id="title" 
                    name="title"
                    placeholder="Masukkan judul artikel yang menarik..."
                    class="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all placeholder-gray-400"
                    required
                >
                <div class="mt-2 text-sm text-gray-500">
                    <span id="titleCount">0</span>/100 karakter
                </div>
            </div>

            <!-- Featured Image -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <label class="block text-sm font-semibold text-gray-900 mb-3">
                    Gambar Unggulan
                </label>
                <div class="relative">
                    <div id="imageUploadArea" class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:border-blue-400 transition-colors cursor-pointer">
                        <div id="uploadPlaceholder">
                            <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                            <p class="text-lg font-medium text-gray-600">Klik atau seret gambar ke sini</p>
                            <p class="text-sm text-gray-500 mt-2">PNG, JPG, JPEG hingga 5MB</p>
                        </div>
                        <div id="imagePreview" class="hidden">
                            <img id="previewImg" src="" alt="Preview" class="max-h-64 mx-auto rounded-lg shadow-md">
                            <button type="button" id="removeImage" class="mt-4 px-4 py-2 text-sm text-red-600 hover:text-red-800 transition-colors">
                                <i class="fas fa-trash mr-2"></i>Hapus Gambar
                            </button>
                        </div>
                    </div>
                    <input type="file" id="featured_image" name="featured_image" accept="image/*" class="hidden">
                </div>
            </div>

            <!-- Article Content -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <label for="content" class="block text-sm font-semibold text-gray-900 mb-3">
                    Konten Artikel
                    <span class="text-red-500">*</span>
                </label>
                <textarea 
                    id="content" 
                    name="content"
                    class="w-full h-96 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    placeholder="Mulai menulis artikel Anda di sini..."
                    required
                ></textarea>
            </div>

            <!-- Article Status -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <label class="block text-sm font-semibold text-gray-900 mb-3">
                    Status Publikasi
                </label>
                <div class="flex space-x-4">
                    <label class="flex items-center">
                        <input type="radio" name="status" value="draft" checked class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-sm font-medium text-gray-700">Draft</span>
                    </label>
                    <label class="flex items-center">
                        <input type="radio" name="status" value="published" class="w-4 h-4 text-blue-600 border-gray-300 focus:ring-blue-500">
                        <span class="ml-2 text-sm font-medium text-gray-700">Terbitkan Sekarang</span>
                    </label>
                </div>
                <div id="publishDateSection" class="mt-4 hidden">
                    <label for="published_at" class="block text-sm font-medium text-gray-700 mb-2">
                        Tanggal Publikasi
                    </label>
                    <input 
                        type="datetime-local" 
                        id="published_at" 
                        name="published_at"
                        class="px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    >
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-4 pt-6">
                <button 
                    type="button" 
                    class="px-6 py-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all"
                >
                    Batal
                </button>
                <button 
                    type="submit" 
                    class="px-8 py-3 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg hover:from-blue-700 hover:to-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform hover:scale-105 transition-all duration-200 shadow-lg"
                >
                    <i class="fas fa-paper-plane mr-2"></i>
                    <span id="submitText">Simpan Artikel</span>
                </button>
            </div>
        </form>
    </main>

    <!-- Success Modal -->
    <div id="successModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="bg-white rounded-xl p-6 mx-4 max-w-md w-full transform transition-all">
            <div class="text-center">
                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 mb-4">
                    <i class="fas fa-check text-green-600 text-xl"></i>
                </div>
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Artikel Berhasil Disimpan!</h3>
                <p class="text-gray-600 mb-6">Artikel Anda telah berhasil disimpan ke database.</p>
                <button id="closeModal" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                    Tutup
                </button>
            </div>
        </div>
    </div>

</x-layout>