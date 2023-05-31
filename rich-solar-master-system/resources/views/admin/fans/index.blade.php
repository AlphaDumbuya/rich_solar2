@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Fans</h3>
    <a href="/admin/fans/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Fan
    </a>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($fans as $fan)
                
            
            <tr>
                <td>{{$fan->name}}</td>
                <td>{{$fan->category}}</td>
                <td>{{$fan->price}}</td>
                <td><a class="primary" href="/admin/fans/{{$fan->id}}"><span class="material-icons-sharp">visibility</span></a></td>
                <td>
                    <a href="/admin/fans/{{$fan->id}}"></a>
                    <form method="POST" action="/admin/fan/{{$fan->id}}">
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