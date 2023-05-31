<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function login(){
        return view('loginPage');
    }

    public function authenticate(Request $request){
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if(auth()->attempt($formFields)){
            $request->session()->regenerate();
            return redirect('/admin');
        }else{
            return back()->withErrors(['email' => 'Invalid Email or Password'])->onlyInput('email');
            //return redirect('/login');

        }

    }
    public function index(){
        return view('admin.users.index', [
            'users' => User::all()
        ]);
    }
    //show register form
    public function create(){
        return view('admin.users.create');
    }

    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'name' => 'required|min:3',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        $formFields['password'] = bcrypt($formFields['password']);
        User::create($formFields);
        return redirect('/admin/users');
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function destroy(User $user){
        $user->delete();
        return redirect('/admin/users');
    }
}
