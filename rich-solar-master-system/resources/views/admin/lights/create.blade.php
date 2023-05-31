@extends('adminLayout')
@section('admincontent')
<div class="mx-1">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24 "
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Create Product
            </h2>
            <p class="mb-4">Post a Light</p>
        </header>

        <form method='POST' action="/admin/light" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2"
                    >Light Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                />
                {{--@error('name')
                    <p class="text-red-500 text-xs mt-1">{{message}}</p>
                @enderror--}}
            </div>

            <div class="mb-6">
                <label
                    for="solar_panel"
                    class="inline-block text-lg mb-2"
                    >Supported Solar Panel</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="solar_panel"
                />
                {{--@error('name')
                    <p class="text-red-500 text-xs mt-1">{{message}}</p>
                @enderror--}}
            </div>

            <div class="mb-6">
                <label
                    for="battery"
                    class="inline-block text-lg mb-2"
                    >Supported Battery</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="battery"
                />
                {{--@error('name')
                    <p class="text-red-500 text-xs mt-1">{{message}}</p>
                @enderror--}}
            </div>

            <div class="mb-6">

                <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Product Category</label>
                <select name="category" id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->name}}">{{$category->name}}</option>
                    @endforeach
                </select>

            </div>

            <div class="mb-6">
                <label for="price" class="inline-block text-lg mb-2">
                    Price
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="price"
                    placeholder="Example: SLL1200"
                />
            </div>

            <div class="mb-6">
                <label for="picture" class="inline-block text-lg mb-2">
                    Product Photo
                </label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="picture"
                />
            </div>

            <div class="mb-6">
                <button
                    class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                >
                    Create Product
                </button>

                <a href="/admin/lights" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</div>
@endsection