<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SolarPanel;
use Illuminate\Http\Request;

class PanelsController extends Controller
{
    public function index(){
        return view('admin.panels.index', [
            'panels' => SolarPanel::all()
        ]);
    }
    public function show(SolarPanel $panel){
        return view('admin.panels.show', [
            'panel' => $panel
        ]);
    }

    public function edit(SolarPanel $panel){
        return view('admin.panels.edit', [
            'panel' => $panel
        ]);
    }

    public function create(){
        return view('admin.panels.create',[
            'categories' => Categories::all()
        ]);
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'wattage' => 'required',
            'voltage' => 'required',
            'current' => 'required',
            'size' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        SolarPanel::create($formFields);
        return redirect('/admin/panels');
    }
    /**update data */
    public function update(Request $request, SolarPanel $panel){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'wattage' => 'required',
            'voltage' => 'required',
            'current' => 'required',
            'size' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $panel->create($formFields);
        return redirect('/admin/panels');
    }

    /*delete panel */
    public function destroy(SolarPanel $panel){
        $panel->delete();
        return redirect('/admin/panels');
    }

}
