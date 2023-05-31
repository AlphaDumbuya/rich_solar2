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
    
 
        </thead>
        <tbody>
                
            
            <tr>
                <td>{{$fan->name}}</td>
                <td>{{$fan->category}}</td>
                <td>{{$fan->price}}</td>
                 
            </tr>

        </tbody>
        
    </table>
    </div>
@endsection