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
                    <!-- Form for adding tours -->
                    <div class="form-area mb-4">
                        <form method="POST" action="{{ route('toursview.update', $tour->id) }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="block mb-1">Title</label>
                                    <x-text-input type="text" class="form-input w-full" name="title" value="{{ $tour->title }}">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label for="type" class="mb-1">Tybe</label>
                                    <div>
                                        <select id="type" class="w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-500 dark:focus:border-green-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="type" >
                                            <option value="{{ $tour->type }}">{{ $tour->type }}</option>
                                            <option value="internal">Internal</option>
                                            <option value="external">External</option>
                                            <option value="religious">Religious</option>
                                            <option value="offer">Offer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label class="block mb-1">Start date</label>
                                    <x-text-input type="date" class="form-input w-full" name="start_date" value="{{ $tour->start_date }}">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label class="block mb-1">End date</label>
                                    <x-text-input type="date" class="form-input w-full" name="end_date" value="{{ $tour->end_date }}">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label class="block mb-1">Price</label>
                                    <x-text-input type="number" class="form-input w-full" name="price" value="{{ $tour->price }}">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label class="block mb-1">Discount</label>
                                    <x-text-input type="number" class="form-input w-full" name="discount" value="{{ $tour->discount }}">
                                    </x-text-input>
                                </div>
                                <div class="col-md-12">
                                    <label class="block mb-1">Description</label>
                                    <textarea type="text" class="form-control border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-600 dark:focus:border-green-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="description" rows="5">{{ $tour->description }}</textarea>
                                </div>
                                <div class="col-md-12">
                                    <label class="block mb-1">Ar description</label>
                                    <textarea type="text" class="form-control border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-green-600 dark:focus:border-green-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" name="ArDescription" rows="5">{{ $tour->ArDescription }}</textarea>
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
