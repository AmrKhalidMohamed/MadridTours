@php
    use Illuminate\Support\Facades\Storage;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tours management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="form-area mb-4">
                        <form method="POST" action="{{ route('toursview.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="mb-1">Title</label>
                                    <x-text-input type="text" class="form-input w-full" name="title">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label for="type" class="mb-1">Tybe</label>
                                    <div>
                                        <select id="type" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-500 dark:focus:border-green-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="type">
                                            <option value="internal">Internal</option>
                                            <option value="external">External</option>
                                            <option value="religious">Religious</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Start date</label>
                                    <x-text-input type="date" class="form-input w-full" name="start_date">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">End date</label>
                                    <x-text-input type="date" class="form-input w-full" name="end_date">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Price</label>
                                    <x-text-input type="number" class="form-input w-full" name="price">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label class="mb-1">Discount</label>
                                    <x-text-input type="number" class="form-input w-full" name="discount">
                                    </x-text-input>
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-1">Description</label>
                                    <textarea type="text" class="form-control border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-600 dark:focus:border-green-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="description" rows="5"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="mb-1">Ar description</label>
                                    <textarea type="text" class="form-control border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-600 dark:focus:border-green-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="ArDescription" rows="5"></textarea>
                                </div>
                            </div>
                            <div class="mt-4">
                                <input type="submit" class="btn btn-success" value="Add">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table mt-5">
                <thead>
                    <tr>
                        <th class="text-white">#</th>
                        <th class="text-white">Tour ID</th>
                        <th class="text-white">Title</th>
                        <th class="text-white">Type</th>
                        <th class="text-white">Start date</th>
                        <th class="text-white">End date</th>
                        <th class="text-white">Price</th>
                        <th class="text-white">Discount</th>
                        <th class="text-white">Description</th>
                        <th class="text-white">Ar description</th>
                        <th class="text-white">Images</th>
                        <th class="text-white">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $key => $tour)
                    <tr>
                        <td class="text-white">{{ ++$key }}</td>
                        <td class="text-white">{{ $tour->id }}</td>
                        <td class="text-white">{{ $tour->title }}</td>
                        <td class="text-white">{{ $tour->type }}</td>
                        <td class="text-white">{{ $tour->start_date }}</td>
                        <td class="text-white">{{ $tour->end_date }}</td>
                        <td class="text-white">{{ $tour->price }}</td>
                        <td class="text-white">{{ $tour->discount }}</td>
                        <td class="text-white">{{ $tour->description }}</td>
                        <td class="text-white">{{ $tour->ArDescription }}</td>
                        <td scope="col">
                            @foreach ($tour->images as $image)
                                <img src="{{ storage::url($image->image_path) }}" width="100px" alt="Tour Image">
                            @endforeach
                        </td>

                        <td class="text-white">
                            <a href="{{ route('toursview.edit', $tour->id) }}" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </a>
                            <form action="{{ route('toursview.destroy', $tour->id) }}" method="POST" style="display:inline">
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
