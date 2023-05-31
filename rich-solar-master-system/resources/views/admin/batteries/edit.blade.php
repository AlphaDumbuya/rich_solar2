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
            <p class="mb-4">Edit a battery</p>
        </header>

        <form method='POST' action="/admin/battery/{{$battery->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-6">
                <label
                    for="name"
                    class="inline-block text-lg mb-2"
                    >Battery Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{$battery->name}}"
                />
                {{--@error('name')
                    <p class="text-red-500 text-xs mt-1">{{message}}</p>
                @enderror--}}
            </div>

            <div class="mb-6">
                <label for="type" class="inline-block text-lg mb-2"
                    >Battery Type</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="type"
                    placeholder="Example: Lithium"
                    value="{{$battery->type}}"
                />
            </div>

            <div class="mb-6">
                <label
                    for="electricity_stored"
                    class="inline-block text-lg mb-2"
                    >Electricity that can be stored</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="electricity_stored"
                    placeholder="Example: "
                    value="{{$battery->electricity_stored}}"
                />
            </div>
            <div class="mb-6">
                <label
                    for="electricity_released"
                    class="inline-block text-lg mb-2"
                    >Electricity that can be released</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="electricity_released"
                    placeholder="Example: "
                    value="{{$battery->electricity_released}}"
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
                    value="{{$battery->category}}"
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
                    value="{{$battery->price}}"
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

                <a href="/admin/batteries" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</div>
@endsection