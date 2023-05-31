@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Categories</h3>

    <a href="/admin/categories/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Category
    </a>

    <p class="text-xs-500 text-red mt-3">Caution: Don't delete a category unless if you know what you are doing</p>
    <p class="text-xs-500 text-red">Deleting the categories may affect the website</p>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Name</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                
            
            <tr>
                <td>{{$category->name}}</td>
                <td>
                    <a href="/admin/categories/{{$category->id}}"></a>
                    <form method="POST" action="/admin/category/{{$category->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="danger"><span class="material-icons-sharp">delete</span>Delete</button>
                    </form>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
    </div>
@endsection