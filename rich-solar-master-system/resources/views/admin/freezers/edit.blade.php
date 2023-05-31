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
            <p class="mb-4">Edit a Freezer</p>
        </header>

        <form method='POST' action="/admin/freezer/{{$freezer->id}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
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
                    value="{{$freezer->litres}}"
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
                    value="{{$freezer->comment}}"

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
                    value="{{$freezer->size}}"
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
                    value="{{$freezer->power}}"
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
                    value="{{$freezer["12_hours_work"]}}"
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
                    value="{{$freezer["24_hours_work"]}}"
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
                    value="{{$freezer->materials}}"
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
                    value="{{$freezer->solar_panel}}"
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
                    value="{{$freezer->battery}}"
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
                    placeholder="Example: Solar Fan"
                    value="{{$freezer->category}}"
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
                    value="{{$freezer->price}}"
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

                <a href="/admin/freezers" class="text-black ml-4"> Back </a>
            </div>

        </form>
    </div>
</div>
@endsection