<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-center">Edit Your Profile</h1>

        <div class="max-w-lg mx-auto bg-white rounded-lg shadow-md p-6">
            {{-- FORMULIR UPDATE --}}
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')

                {{-- Name --}}
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm">
                </div>

                {{-- Email (readonly) --}}
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm bg-gray-100" readonly>
                    <p class="mt-1 text-sm text-gray-500">Email cannot be changed.</p>
                </div>

                {{-- Phone Number --}}
                <div class="mb-4">
                    <label for="phone_number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm">
                </div>

                {{-- Address --}}
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea id="address" name="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm sm:text-sm">{{ old('address', $user->address) }}</textarea>
                </div>

                {{-- Profile Image --}}
                <div class="mb-4">
                    <label for="profile_image" class="block text-sm font-medium text-gray-700">Profile Image</label>
                    <div class="flex items-center">
                        @if ($user->profile_image)
                            <img src="{{ asset($user->profile_image) }}" alt="Profile Image" class="w-16 h-16 rounded-full mr-4 object-cover">
                        @else
                            <div class="w-16 h-16 rounded-full bg-gray-200 flex items-center justify-center mr-4">
                                <span class="text-gray-500">No Image</span>
                            </div>
                        @endif
                        <input type="file" id="profile_image" name="profile_image" accept="image/*" class="mt-1">
                    </div>
                </div>

                {{-- Submit Buttons --}}
                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Save Changes</button>
                    <a href="{{ url()->previous() }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">Cancel</a>
                </div>
            </form>
            @if (session('success'))
                <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</x-layout>
