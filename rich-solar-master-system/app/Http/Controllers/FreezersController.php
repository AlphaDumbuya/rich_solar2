<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SolarFreezer;
use Illuminate\Http\Request;

class FreezersController extends Controller
{
    public function index(){
        return view('admin.freezers.index', [
            'freezers' => SolarFreezer::all()
        ]);
    }
    public function show(SolarFreezer $freezer){
        return view('admin.freezers.show', [
            'freezer' => $freezer
        ]);
    }

    public function edit(SolarFreezer $freezer){
        return view('admin.freezers.edit', [
            'freezer' => $freezer
        ]);
    }

    public function create(){
        return view('admin.freezers.create',[
            'categories' => Categories::all()
        ]);
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'litres' => 'required',
            'comment' => 'required',
            'size' => 'required',
            'power' => 'required',
            '12_hours_work' => 'required',
            '24_hours_work' => 'required',
            'materials' => 'required',
            'solar_panel' => 'required',
            'battery' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        SolarFreezer::create($formFields);
        return redirect('/admin/freezers');
    }
    /**update data */
    public function update(Request $request, SolarFreezer $freezer){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'litres' => 'required',
            'comment' => 'required',
            'size' => 'required',
            'power' => 'required',
            '12_hours_work' => 'required',
            '24_hours_work' => 'required',
            'materials' => 'required',
            'solar_panel' => 'required',
            'battery' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $freezer->create($formFields);
        return redirect('/admin/freezers');
    }

    /*delete freezer */
    public function destroy(SolarFreezer $freezer){
        $freezer->delete();
        return redirect('/admin/freezers');
    }
}
