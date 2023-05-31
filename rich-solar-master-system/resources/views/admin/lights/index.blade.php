@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Lights</h3>
    <a href="/admin/lights/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Light
    </a>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($lights as $light)
                
            
            <tr>
                <td>{{$light->name}}</td>
                <td>{{$light->category}}</td>
                <td>{{$light->price}}</td>
                <td><a class="primary" href="/admin/lights/{{$light->id}}"><span class="material-icons-sharp">visibility</span></a></td>
                <td>
                    <a href="/admin/lights/{{$light->id}}"></a>
                    <form method="POST" action="/admin/light/{{$light->id}}">
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