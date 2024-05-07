<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Customers management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <!-- Form for adding customers -->
                    <div class="form-area mb-4">
                        <form method="POST" action="{{ route('customersview.update', $customer->id) }}">
                            @csrf
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block mb-1">Customer ID</label>
                                    <x-text-input type="number" class="form-input w-full" name="customer_id" value="{{ $customer->id }}">
                                    </x-text-input>
                                </div>
                                <div>
                                    <label class="block mb-1">Name</label>
                                    <x-text-input type="text" class="form-input w-full" name="name" value="{{ $customer->name }}">
                                    </x-text-input>
                                </div>
                                <div>
                                    <label class="block mb-1">Phone number</label>
                                    <x-text-input type="text" class="form-input w-full" name="phone_number" value="{{ $customer->phone_number }}">
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
