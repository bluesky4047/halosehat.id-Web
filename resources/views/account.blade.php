<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Edit Your Profile</h1>
        <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
            <!-- Using div with onClick instead of form due to sandbox restrictions -->
            <div>
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="Nama kamu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="Email Kamu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm" readonly>
                    <p class="mt-1 text-sm text-gray-500">Email cannot be changed.</p>
                </div>
                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="Telp Kamu" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" name="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 sm:text-sm">Alamat kamu</textarea>
                </div>
                <div class="mb-4">
                    <label for="profile_image" class="block text-sm font-medium text-gray-700">Profile Image</label>
                    <div class="flex items-center">
                        @if ("Kamu")
                            <img src="" alt="Profile Image" class="w-16 h-16 rounded-full mr-4 object-cover">
                        @else
                            <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        <input type="file" id="profile_image" name="profile_image" accept="image/*" class="mt-1">
                    </div>
                </div>
                <div class="flex justify-between">
                    <button onclick="alert('Profile updated!')" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Changes</button>
                    <a href="#" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>