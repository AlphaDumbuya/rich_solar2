@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Power Controllers</h3>
    <a href="/admin/controllers/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Controller
    </a>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Solar Panel</th>
 
        </thead>
        <tbody>
                
            
            <tr>
                <td>{{$controller->name}}</td>
                <td>{{$controller->category}}</td>
                <td>{{$controller->price}}</td>
                <td>{{$controller->solar_panel}}</td>
                 
            </tr>

        </tbody>
        
    </table>
    </div>
@endsection