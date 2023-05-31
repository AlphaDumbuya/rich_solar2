@extends('adminLayout')
@section('admincontent')
<div class="mx-1">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24 "
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create Category
            </h2>
            <p class="mb-4">Add a category - only use small letters and underscore instead of space</p>
        </header>

        <form method='POST' action="/admin/category" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2"
                    >Category Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                />
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror
            </div>

 
            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Create Category
                </button>

                <a href="/admin/fans" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</div>
@endsection