@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Batteries</h3>
    <a href="/admin/batteries/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Battery
    </a>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Type</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($batteries as $battery)
                
            
            <tr>
                <td>{{$battery->name}}</td>
                <td>{{$battery->category}}</td>
                <td>{{$battery->price}}</td>
                <td>{{$battery->type}}</td>
                <td><a class="primary" href="/admin/batteries/{{$battery->id}}"><span class="material-icons-sharp">visibility</span></a></td>
                <td>
                    <a href="/admin/batteries/{{$battery->id}}"></a>
                    <form method="POST" action="/admin/battery/{{$battery->id}}">
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