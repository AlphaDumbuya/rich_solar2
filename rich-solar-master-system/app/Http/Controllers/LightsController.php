<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SolarLight;
use Illuminate\Http\Request;

class LightsController extends Controller
{
    public function index(){
        return view('admin.lights.index', [
            'lights' => SolarLight::all()
        ]);
    }
    public function show(SolarLight $light){
        return view('admin.lights.show', [
            'light' => $light
        ]);
    }

    public function edit(SolarLight $light){
        return view('admin.lights.edit', [
            'light' => $light
        ]);
    }

    public function create(){
        return view('admin.lights.create',[
            'categories' => Categories::all()
        ]);
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'solar_panel' => 'required',
            'battery' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        SolarLight::create($formFields);
        return redirect('/admin/lights');
    }
    /**update data */
    public function update(Request $request, SolarLight $lights){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'solar_panel' => 'required',
            'battery' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $lights->create($formFields);
        return redirect('/admin/lights');
    }

    /*delete light */
    public function destroy(SolarLight $light){
        $light->delete();
        return redirect('/admin/lights');
    }
}
