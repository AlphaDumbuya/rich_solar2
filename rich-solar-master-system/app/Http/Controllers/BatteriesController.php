<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SolarBattery;
use Illuminate\Http\Request;

class BatteriesController extends Controller
{
    //
    public function index(){
        return view('admin.batteries.index', [
            'batteries' => SolarBattery::all()
        ]);
    }
    public function show(SolarBattery $battery){
        return view('admin.batteries.show', [
            'battery' => $battery
        ]);
    }

    public function edit(SolarBattery $battery){
        return view('admin.batteries.edit', [
            'battery' => $battery
        ]);
    }
    public function create(){
        return view('admin.batteries.create',[
            'categories' => Categories::all()
        ]);
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'type' => 'required',
            'electricity_stored' => 'required',
            'electricity_released' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        SolarBattery::create($formFields);
        return redirect('/admin/batteries');
    }
    /**update data */
    public function update(Request $request, SolarBattery $battery){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'type' => 'required',
            'electricity_stored' => 'required',
            'electricity_released' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $battery->create($formFields);
        return redirect('/admin/batteries');
    }

    /*delete battery */
    public function destroy(SolarBattery $battery){
        $battery->delete();
        return redirect('/admin/batteries');
    }

}
