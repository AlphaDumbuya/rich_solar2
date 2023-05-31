@extends('adminLayout')
@section('admincontent')
<div class="mx-1">
    <div
        class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24 "
    >
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Edit Product
            </h2>
            <p class="mb-4">Edit a Power Controller</p>
        </header>

        <form method='POST' action="/admin/controller/{{$controller->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2"
                    >Power Controller Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{$controller->name}}"
                />
                {{--@error('name')
                    <p class="text-red-500 text-xs mt-1">{{message}}</p>
                @enderror--}}
            </div>

            <div class="mb-6">
                <label for="solar_panel" class="inline-block text-lg mb-2"
                    >Supported Solar Panel</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="solar_panel"
                    placeholder="Example: "
                    value="{{$controller->solar_panel}}"
                />
            </div>

            <div class="mb-6">
                <label
                    for="voltage"
                    class="inline-block text-lg mb-2"
                    >Controller's Voltage</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="voltage"
                    placeholder="Example: "
                    value="{{$controller->voltage}}"
                />
            </div>

            <div class="mb-6">
                <label
                    for="category"
                    class="inline-block text-lg mb-2"
                >
                    Product Category
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="category"
                    placeholder="Example: Solar Battery"
                    value="{{$controller->category}}"
                />
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
                    value="{{$controller->price}}"
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

                <a href="/admin/controllers" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</div>
@endsection