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
                    <!-- Form for adding customers -->
                    <div class="form-area mb-4">
                        <form method="POST" action="{{ route('customersview.store') }}">
                            @csrf
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block mb-1">Customer name</label>
                                    <x-text-input type="text" class="form-input w-full" name="name">
                                    </x-text-input>
                                </div>
                                <div>
                                    <label class="block mb-1">Customer phone number</label>
                                    <x-text-input type="number" class="form-input w-full" name="phone_number">
                                    </x-text-input>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="submit" class="btn btn-success" value="Add">
                            </div>
                        </form>
                    </div>
                    <!-- Form for adding bookings -->
                    <div class="form-area mb-4">
                        <form method="POST" action="{{ route('bookingsview.store') }}">
                            @csrf
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block mb-1">Customer ID</label>
                                    <x-text-input type="number" class="form-input w-full" name="customer_id" value="{{ $latestCustomerId ?? '' }}">
                                    </x-text-input>
                                </div>
                                <div>
                                    <label class="block mb-1">Tour ID</label>
                                    <x-text-input type="number" class="form-input w-full" name="tour_id">
                                    </x-text-input>
                                </div>
                                <div>
                                    <label class="block mb-1">Status</label>
                                        <select id="type" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-500 dark:focus:border-green-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="status">
                                            <option value="pending">pending</option>
                                            <option value="active">active</option>
                                            <option value="canceled">canceled</option>
                                        </select>
                                    </div>
                                <div>
                                    <label class="block mb-1">Booking date</label>
                                    <x-text-input type="date" class="form-input w-full" name="booking_date">
                                    </x-text-input>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="submit" class="btn btn-success" value="Add">
                            </div>
                        </form>
                    </div>
                    <!-- Table for displaying bookings -->
                </div>
            </div>
            <table class="table mt-5 bg-gray-800">
                <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Customer ID</th>
                        <th class="text-white">Tour ID</th>
                        <th class="text-white">Status</th>
                        <th class="text-white">Booking date</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $key => $booking)
                    <tr>
                        <td class="text-white">{{ ++$key }}</td>
                        <td class="text-white">
                            {{ $booking->customer_id }}
                            <a href="{{ route('customersview.edit', ['customer' => $booking->customer_id]) }}" class="ml-2 btn btn-outline-success">show</a>
                        </td>
                        <td class="text-white">{{ $booking->tour_id }}</td>
                        <td class="text-white">{{ $booking->status }}</td>
                        <td class="text-white">{{ $booking->booking_date }}</td>
                        <td class="text-white">
                            <a href="{{ route('bookingsview.edit', $booking->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>
                            <form action="{{ route('bookingsview.destroy', $booking->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
