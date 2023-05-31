@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Freezers</h3>
    <a href="/admin/freezers/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Freezer
    </a>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Liters</th>
            <th>Category</th>
            <th>Price</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($freezers as $freezer)
                
            
            <tr>
                <td>{{$freezer->litres}}</td>
                <td>{{$freezer->category}}</td>
                <td>{{$freezer->price}}</td>
                <td><a class="primary" href="/admin/freezers/{{$freezer->id}}"><span class="material-icons-sharp">visibility</span></a></td>
                <td>
                    <a href="/admin/freezers/{{$freezer->id}}"></a>
                    <form method="POST" action="/admin/freezer/{{$freezer->id}}">
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