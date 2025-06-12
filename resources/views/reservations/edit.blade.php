<x-layout>
    <x-slot:title>Edit Reservation</x-slot:title>

    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Edit Reservation</h1>

        <form action="{{ route('reservations.update', $reservation->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <input type="date" name="reservation_date" value="{{ $reservation->reservation_date }}" required>
            <input type="time" name="reservation_time" value="{{ $reservation->reservation_time }}" required>
            <input type="text" name="hospital" value="{{ $reservation->hospital }}" required>
            <input type="text" name="service" value="{{ $reservation->service }}" required>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-layout>
