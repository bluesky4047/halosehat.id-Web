<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto px-4 py-8">
        <!-- Header Section -->
        <h1 class="text-3xl font-bold text-center mb-8 text-gray-800">Reservation Management</h1>

        <!-- Existing Reservations Section -->
        <div class="bg-white shadow-md rounded-lg p-6 mb-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Your Reservations</h2>
            <div class="overflow-x-auto">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">Date</th>
                            <th class="py-3 px-6 text-left">Time</th>
                            <th class="py-3 px-6 text-left">Hospital</th>
                            <th class="py-3 px-6 text-left">Service</th>
                            <th class="py-3 px-6 text-left">Status</th>
                            <th class="py-3 px-6 text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @forelse ($reservations as $reservation)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">{{ $reservation->reservation_date }}</td>
                                <td class="py-3 px-6 text-left">{{ $reservation->reservation_time }}</td>
                                <td class="py-3 px-6 text-left">{{ $reservation->hospital }}</td>
                                <td class="py-3 px-6 text-left">{{ $reservation->service }}</td>
                                <td class="py-3 px-6 text-left">
                                    <span class="px-2 py-1 rounded-full text-xs 
                                        {{ ($reservation->status == 'Confirmed' ? 'bg-green-100 text-green-800' : 
                                           ($reservation->status == 'Pending' ? 'bg-yellow-100 text-yellow-800' : 
                                           'bg-red-100 text-red-800')) }}">
                                        {{ $reservation->status }}
                                    </span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <a href="{{ route('reservations.edit', $reservation->id) }}" class="text-blue-600 hover:text-blue-800 mr-2">Edit</a>

                                    <form action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="text-red-600 hover:text-red-800">Cancel</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="py-3 px-6 text-center text-gray-500">
                                    No reservations found
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- New Reservation Form Section -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h2 class="text-2xl font-semibold mb-4 text-gray-700">Make a New Reservation</h2>
            <form action="{{ route('reservations.store') }}" method="POST" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Reservation Date -->
                    <div>
                        <label for="reservation_date" class="block text-sm font-medium text-gray-700">Date</label>
                        <input type="date" name="reservation_date" id="reservation_date" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                               required>
                    </div>

                    <!-- Reservation Time -->
                    <div>
                        <label for="reservation_time" class="block text-sm font-medium text-gray-700">Time</label>
                        <input type="time" name="reservation_time" id="reservation_time" 
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                               required>
                    </div>

                    <!-- Hospital -->
                    <div>
                        <label for="hospital" class="block text-sm font-medium text-gray-700">Hospital</label>
                        <select name="hospital" id="hospital" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                            <option value="">Select Hospital</option>
                            <option value="Hospital A">Hospital A</option>
                            <option value="Hospital B">Hospital B</option>
                            <option value="Hospital C">Hospital C</option>
                        </select>
                    </div>

                    <!-- Service -->
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700">Service</label>
                        <select name="service" id="service" 
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                required>
                            <option value="">Select Service</option>
                            <option value="Consultation">Consultation</option>
                            <option value="Check-up">Check-up</option>
                            <option value="Treatment">Treatment</option>
                        </select>
                    </div>
                </div>

                <div class="flex justify-end">
                    <button type="submit" 
                            class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Submit Reservation
                    </button>
                </div>
            </form>
        </div>
    </div>

</x-layout>