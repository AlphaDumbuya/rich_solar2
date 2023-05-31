@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Panels</h3>
    <a href="/admin/batteries/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Panel
    </a>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Size</th>
 
        </thead>
        <tbody>
                
            
            <tr>
                <td>{{$panel->name}}</td>
                <td>{{$panel->category}}</td>
                <td>{{$panel->price}}</td>
                <td>{{$panel->size}}</td>
                 
            </tr>

        </tbody>
        
    </table>
    </div>
@endsection