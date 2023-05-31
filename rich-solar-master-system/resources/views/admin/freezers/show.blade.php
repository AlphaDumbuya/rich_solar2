@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Solar Freezers</h3>
    <a href="/admin/freezers/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add Freezer
    </a>
    <div class="recent-updates">

    <table>
        <thead class="danger">
            <th>Litres</th>
            <th>Category</th>
            <th>Price</th>
    
 
        </thead>
        <tbody>
                
            
            <tr>
                <td>{{$freezer->litres}}</td>
                <td>{{$freezer->category}}</td>
                <td>{{$freezer->price}}</td>
                 
            </tr>

        </tbody>
        
    </table>
    </div>
@endsection