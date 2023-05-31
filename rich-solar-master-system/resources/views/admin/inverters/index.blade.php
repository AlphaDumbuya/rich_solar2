@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Inverters</h3>
    <a href="/admin/inverters/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Inverter
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
            @foreach ($inverters as $inverter)
                
            
            <tr>
                <td>{{$inverter->name}}</td>
                <td>{{$inverter->category}}</td>
                <td>{{$inverter->price}}</td>
                <td><a class="primary" href="/admin/inverters/{{$inverter->id}}"><span class="material-icons-sharp">visibility</span></a></td>
                <td>
                    <a href="/admin/inverters/{{$inverter->id}}"></a>
                    <form method="POST" action="/admin/inverter/{{$inverter->id}}">
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