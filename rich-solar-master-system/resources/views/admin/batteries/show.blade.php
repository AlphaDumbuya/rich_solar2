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
 
        </thead>
        <tbody>
                
            
            <tr>
                <td>{{$battery->name}}</td>
                <td>{{$battery->category}}</td>
                <td>{{$battery->price}}</td>
                <td>{{$battery->type}}</td>
                 
            </tr>

        </tbody>
        
    </table>
    </div>
@endsection