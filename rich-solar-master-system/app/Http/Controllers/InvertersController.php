<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\SolarInverter;

class InvertersController extends Controller
{
    
    public function index(){
        return view('admin.inverters.index', [
            'inverters' => SolarInverter::all()
        ]);
    }
    public function show(SolarInverter $inverter){
        return view('admin.inverters.show', [
            'inverter' => $inverter
        ]);
    }

    public function edit(SolarInverter $inverter){
        return view('admin.inverters.edit', [
            'inverter' => $inverter
        ]);
    }

    public function create(){
        return view('admin.inverters.create',[
            'categories' => Categories::all()
        ]);
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'type' => 'required',
            'solar_panel' => 'required',
            'comment' => 'required',
            'output_voltage' => 'required',
            'output_current' => 'required',
            'battery_wire' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        SolarInverter::create($formFields);
        return redirect('/admin/inverters');
    }
    /**update data */
    public function update(Request $request, SolarInverter $inverter){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'type' => 'required',
            'solar_panel' => 'required',
            'comment' => 'required',
            'output_voltage' => 'required',
            'output_current' => 'required',
            'battery_wire' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $inverter->create($formFields);
        return redirect('/admin/inverters');
    }

    /*delete freezer */
    public function destroy(SolarInverter $inverter){
        $inverter->delete();
        return redirect('/admin/inverters');
    }
}
