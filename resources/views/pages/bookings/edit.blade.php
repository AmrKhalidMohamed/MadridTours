<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bookings management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Form for adding bookings -->
                    <div class="form-area mb-4">
                        <form method="POST" action="{{ route('bookingsview.update', $booking->id) }}">
                            @csrf
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block mb-1">Customer ID</label>
                                    <x-text-input type="number" class="form-input w-full" name="customer_id" value="{{ $booking->customer_id }}">
                                    </x-text-input>
                                </div>
                                <div>
                                    <label class="block mb-1">Tour ID</label>
                                    <x-text-input type="number" class="form-input w-full" name="room_id" value="{{ $booking->tour_id }}">
                                    </x-text-input>
                                </div>
                                <div>
                                    <label class="block mb-1">Status</label>
                                        <select id="status" value="{{ $booking->status }}" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-500 dark:focus:border-green-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="status">
                                            <option value="pending">pending</option>
                                            <option value="active">active</option>
                                            <option value="canceled">canceled</option>
                                        </select>
                                    </div>
                                <div>
                                    <label class="block mb-1">Booking date</label>
                                    <x-text-input type="date" class="form-input w-full" name="booking_date" value="{{ $booking->booking_date }}">
                                    </x-text-input>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="submit" class="btn btn-success" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
