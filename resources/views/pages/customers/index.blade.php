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
                </div>
            </div>
            <table class="table mt-5 bg-gray-800">
                <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Customer ID</th>
                        <th class="text-white">Name</th>
                        <th class="text-white">Phone number</th>
                        <th class="text-white">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $key => $customer)
                    <tr>
                        <td class="text-white">{{ ++$key }}</td>
                        <td class="text-white">{{ $customer->id }}</td>
                        <td class="text-white">{{ $customer->name}}</td>
                        <td class="text-white">{{ $customer->phone_number}}</td>
                        <td class="text-white">
                            <a href="{{ route('customersview.edit', $customer->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>
                            <form action="{{ route('customersview.destroy', $customer->id) }}" method="POST" style="display:inline">
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
