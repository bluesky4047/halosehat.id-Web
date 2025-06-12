<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <main class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        {{-- Pesan Sukses/Error --}}
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Sukses!</strong>
                <span class="block sm:inline">{{ session('success') }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="this.parentElement.parentElement.remove();"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.15a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.029a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.15 2.758 3.15a1.2 1.2 0 0 1 0 1.697z"/></svg>
                </span>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <strong class="font-bold">Oops!</strong>
                <span class="block sm:inline">Ada beberapa masalah dengan input Anda:</span>
                <ul class="mt-2 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" onclick="this.parentElement.parentElement.remove();"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.15a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.029a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.15 2.758 3.15a1.2 1.2 0 0 1 0 1.697z"/></svg>
                </span>
            </div>
        @endif

        <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
            @csrf

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
                    value="{{ old('title') }}"
                    maxlength="255" {{-- Tambahkan maxlength sesuai di migrasi --}}
                >
                <div class="mt-2 text-sm text-gray-500">
                    <span id="titleCount">{{ strlen(old('title')) }}</span>/255 karakter
                </div>
                @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <label for="category" class="block text-sm font-semibold text-gray-900 mb-3">
                    Kategori Artikel
                </label>
                <input
                    type="text"
                    id="category"
                    name="category"
                    placeholder="Contoh: Teknologi, Kesehatan, Gaya Hidup"
                    class="w-full px-4 py-3 text-lg border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-all placeholder-gray-400"
                    value="{{ old('category') }}"
                    maxlength="255" {{-- Tambahkan maxlength sesuai di migrasi --}}
                >
                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <label class="block text-sm font-semibold text-gray-900 mb-3">
                    Gambar Unggulan
                </label>
                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg"
                     id="image-drop-area">
                    <div class="space-y-1 text-center">
                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L40 32" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <div class="flex text-sm text-gray-600">
                            <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-blue-500">
                                <span>Unggah file</span>
                                <input id="file-upload" name="featured_image" type="file" class="sr-only">
                            </label>
                            <p class="pl-1">atau tarik dan lepas</p>
                        </div>
                        <p class="text-xs text-gray-500">PNG, JPG, GIF hingga 10MB</p>
                        <div id="image-preview" class="mt-4 @if(!old('featured_image')) hidden @endif">
                            @if(old('featured_image'))
                                <img src="{{ old('featured_image_url') }}" alt="Image Preview" class="mx-auto max-h-48 rounded-lg shadow-md">
                                <p id="image-name" class="mt-2 text-sm text-gray-600">{{ old('featured_image_name') }}</p>
                            @else
                                <img src="#" alt="Image Preview" class="mx-auto max-h-48 rounded-lg shadow-md">
                                <p id="image-name" class="mt-2 text-sm text-gray-600"></p>
                            @endif
                        </div>
                    </div>
                </div>
                @error('featured_image')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6">
                <label for="content" class="block text-sm font-semibold text-gray-900 mb-3">
                    Konten Artikel
                    <span class="text-red-500">*</span>
                </label>
                <textarea
                    id="content"
                    name="content"
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500 p-3"
                    rows="15"
                    placeholder="Tulis konten artikel Anda di sini..."
                    required
                >{{ old('content') }}</textarea>
                @error('content')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end gap-4">
                <a href="{{ route('articles.index') }}"
                    class="px-8 py-3 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg shadow-sm hover:bg-gray-50 focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transform hover:scale-105 transition-all duration-200 flex items-center justify-center"
                >
                    <i class="fas fa-times-circle mr-2"></i>
                    Batal
                </a>
                <button
                    type="submit"
                    class="px-8 py-3 text-sm font-medium text-white bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg hover:from-blue-700 hover:to-blue-800 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transform hover:scale-105 transition-all duration-200 shadow-lg flex items-center justify-center"
                >
                    <i class="fas fa-paper-plane mr-2"></i>
                    <span id="submitText">Simpan Artikel</span>
                </button>
            </div>
        </form>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Title character count (updated for 255 max length)
            const titleInput = document.getElementById('title');
            const titleCount = document.getElementById('titleCount');
            titleInput.addEventListener('input', function() {
                titleCount.textContent = this.value.length;
            });

            // Image file upload preview
            const fileUpload = document.getElementById('file-upload');
            const imagePreview = document.getElementById('image-preview');
            const previewImage = imagePreview.querySelector('img');
            const imageName = document.getElementById('image-name');

            fileUpload.addEventListener('change', function(event) {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        imageName.textContent = file.name;
                        imagePreview.classList.remove('hidden');
                    };
                    reader.readAsDataURL(file);
                } else {
                    imagePreview.classList.add('hidden');
                    previewImage.src = '#';
                    imageName.textContent = '';
                }
            });

            // Drag and drop functionality for image
            const imageDropArea = document.getElementById('image-drop-area');

            imageDropArea.addEventListener('dragover', (event) => {
                event.stopPropagation();
                event.preventDefault();
                event.dataTransfer.dropEffect = 'copy';
                imageDropArea.classList.add('border-blue-500', 'bg-blue-50');
            });

            imageDropArea.addEventListener('dragleave', (event) => {
                imageDropArea.classList.remove('border-blue-500', 'bg-blue-50');
            });

            imageDropArea.addEventListener('drop', (event) => {
                event.stopPropagation();
                event.preventDefault();
                imageDropArea.classList.remove('border-blue-500', 'bg-blue-50');

                const files = event.dataTransfer.files;
                if (files.length > 0) {
                    fileUpload.files = files; // Set the dropped file to the input
                    const changeEvent = new Event('change');
                    fileUpload.dispatchEvent(changeEvent); // Trigger change event
                }
            });
        });
    </script>
</x-layout>