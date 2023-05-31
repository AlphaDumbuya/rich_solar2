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
                    for="name"
                    class="inline-block text-lg mb-2"
                    >Inverter Name</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{$inverter->name}}"
                />
            </div>

            <div class="mb-6">
                <label
                    for="type"
                    class="inline-block text-lg mb-2"
                    >Type</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="type"
                    placeholder=""
                    value="{{$inverter->type}}"

                />
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
                    placeholder="Example: "
                    value="{{$inverter->solar_panel}}"

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
                    placeholder="Example:20 pieces of batteryinseriesallowed "
                    value="{{$inverter->comment}}"
                />
            </div>
            <div class="mb-6">
                <label
                    for="output_voltage"
                    class="inline-block text-lg mb-2"
                    >Output Voltage</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="output_voltage"
                    placeholder="Example: "
                    value="{{$inverter->output_voltage}}"
                />
            </div>
            <div class="mb-6">
                <label
                    for="output_current"
                    class="inline-block text-lg mb-2"
                    >Output Current</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="output_current"
                    placeholder="Example: "
                    value="{{$inverter->output_current}}"
                />
            </div>
            <div class="mb-6">
                <label
                    for="battery_wire"
                    class="inline-block text-lg mb-2"
                    >Battery Wire</label
                >
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="battery_wire"
                    value="{{$inverter->battery_wire}}"
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
                    placeholder="Example: Solar Inverter"
                    value="{{$inverter->category}}"
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
                    value="{{$inverter->price}}"
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

                <a href="/admin/inverters" class="text-black ml-4"> Back </a>
            </div>

        </form>
    </div>
</div>
@endsection