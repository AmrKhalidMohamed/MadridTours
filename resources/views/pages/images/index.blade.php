@php
    use Illuminate\Support\Facades\Storage;
@endphp

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Images management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="form-area mb-4">
                        @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                        @endif
                        <form method="POST" action="{{ route('imagesview.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Chose file</label>
                                    <x-text-input type="file" class="form-control " name="image">
                                    </x-text-input>
                                </div>
                                <div class="col-md-6">
                                    <label>Tour ID</label>
                                    <x-text-input type="text" class="form-control" name="tour_id">
                                    </x-text-input>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mt-3">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <table class="table mt-5">
                <thead>
                  <tr>
                    <th scope="col" class="text-white" >#</th>
                    <th scope="col" class="text-white" >Tour ID</th>
                    <th scope="col" class="text-white" >Images</th>
                    <th scope="col" class="text-white" >Action</th>
                  </tr>
                </thead>
                <tbody>


                    @foreach ( $images as $key => $image )

                    <tr>
                        <td scope="col" class="text-white">{{ ++$key }}</td>
                        <td scope="col" class="text-white">{{ $image->tour_id }}</td>
                        <td scope="col" class="text-white"><img src="{{ storage::url($image->image_path) }}" width="100px" alt="Room Image"></td>
                        <td scope="col">

                        <form action="{{ route('imagesview.destroy', $image->id) }}" method="POST" >
                         @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
                        </form>
                        </td>

                      </tr>

                    @endforeach




                </tbody>
              </table>
        </div>
    </div>
</x-app-layout>
