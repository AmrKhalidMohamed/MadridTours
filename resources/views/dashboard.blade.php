<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 d-flex justify-content-around">
                    <a href="{{ route('bookingsview.index') }}" class="btn btn-success">
                        Bookings
                    </a>
                    <a  href="{{ route('customersview.index') }}" class="btn btn-success">
                        Customers
                    </a>
                    <a href="{{ route('toursview.index') }}" class="btn btn-success">
                        Tours
                    </a>
                    <a href="{{ route('imagesview.index') }}" class="btn btn-success">
                        Images
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
