@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Panels</h3>
    <a href="/admin/panels/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Panel
    </a>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Size</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($panels as $panel)
                
            
            <tr>
                <td>{{$panel->name}}</td>
                <td>{{$panel->category}}</td>
                <td>{{$panel->price}}</td>
                <td>{{$panel->size}}</td>
                <td><a class="primary" href="/admin/panels/{{$panel->id}}"><span class="material-icons-sharp">visibility</span></a></td>
                <td>
                    <a href="/admin/panels/{{$panel->id}}"></a>
                    <form method="POST" action="/admin/panel/{{$panel->id}}">
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