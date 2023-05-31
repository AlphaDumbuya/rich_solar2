
@extends('adminLayout')
@section('admincontent')
<h3 class="text-2xl font-bold">Manage Users</h3>
    <a href="/admin/users/create" class="mt-5 add-product">                    
        <span class="material-icons-sharp">add</span>  Add User
    </a>
    <div class="recent-updates">

        <table>
            <thead class="danger">
                <th>Username</th>
                <th>Email</th>
                <th></th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    
                
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="/admin/users/{{$user->id}}"></a>
                        <form method="POST" action="/admin/user/{{$user->id}}">
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
