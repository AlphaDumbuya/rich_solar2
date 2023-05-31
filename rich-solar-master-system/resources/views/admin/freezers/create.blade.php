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
            <p class="mb-4">Post a freezer</p>
        </header>

        <form method='POST' action="/admin/freezer" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label
                    for="litres"
                    class="inline-block text-lg mb-2"
                    >Freezer Litres</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="litres"
                />
            </div>

            <div class="mb-6">
                <label
                    for="comment"
                    class="inline-block text-lg mb-2"
                    >Comment</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="comment"
                    placeholder="Buy freezer separately = SLL 9,225"
                />
            </div>
            <div class="mb-6">
                <label
                    for="size"
                    class="inline-block text-lg mb-2"
                    >Freezer Size</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="size"
                    placeholder="Example: 662*459*627mm"
                />
            </div>

            <div class="mb-6">
                <label
                    for="power"
                    class="inline-block text-lg mb-2"
                    >Freezer Power</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="power"
                    placeholder="Example: 45w"
                />
            </div>
            <div class="mb-6">
                <label
                    for="12_hours_work"
                    class="inline-block text-lg mb-2"
                    >Freezer 12 Hours Work</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="24_hours_work"
                    placeholder="Example: "
                />
            </div>
            <div class="mb-6">
                <label
                    for="24_hours_work"
                    class="inline-block text-lg mb-2"
                    >Freezer 24 Hours Work</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="12_hours_work"
                    placeholder="Example: "
                />
            </div>
            <div class="mb-6">
                <label
                    for="materials"
                    class="inline-block text-lg mb-2"
                    >Materials</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="materials"
                    placeholder="Example: A full set of materials（Work 12 hours）"
                />
            </div>
            <div class="mb-6">
                <label
                    for="solar_panel"
                    class="inline-block text-lg mb-2"
                    >Supported Solar Panels</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="solar_panel"
                    placeholder="Example: 80W*3pcs"
                />
            </div>

            <div class="mb-6">
                <label
                    for="battery"
                    class="inline-block text-lg mb-2"
                    >Supported Solar Batteries</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="battery"
                    placeholder="Example: 12V 150AH*1pcs Controller：12V 24V30A"
                />
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

                <a href="/admin/fans" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
</div>
@endsection