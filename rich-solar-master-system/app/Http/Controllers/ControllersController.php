<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\SolarController;

class ControllersController extends Controller
{
    public function index(){
        return view('admin.admincontrollers.index', [
            'controllers' => SolarController::all()
        ]);
    }
    public function show(SolarController $controller){
        return view('admin.admincontrollers.show', [
            'controller' => $controller
        ]);
    }

    public function edit(SolarController $controller){
        return view('admin.admincontrollers.edit', [
            'controller' => $controller
        ]);
    }
 
    public function create(){
        return view('admin.admincontrollers.create',[
            'categories' => Categories::all()
        ]);
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'solar_panel' => 'required',
            'voltage' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        SolarController::create($formFields);
        return redirect('/admin/controllers');
    }
    /**update data */
    public function update(Request $request, SolarController $controller){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'solar_panel' => 'required',
            'voltage' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $controller->create($formFields);
        return redirect('/admin/controllers');
    }

    /*delete panel */
    public function destroy(SolarController $controller){
        $controller->delete();
        return redirect('/admin/controllers');
    }
}
