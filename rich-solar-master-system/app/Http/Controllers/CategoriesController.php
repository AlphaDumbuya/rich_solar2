<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\SolarBattery;
use App\Models\SolarController;
use App\Models\SolarFan;
use App\Models\SolarFreezer;
use App\Models\SolarInverter;
use App\Models\SolarLight;
use App\Models\SolarPanel;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function categories(){
        return view('categories.index', [
            'panels' => SolarPanel::all(),
            'lights' => SolarLight::all(),
            'freezers' => SolarFreezer::all(),
            'inverters' => SolarInverter::all(),
            'fans' => SolarFan::all(),
            'controllers' => SolarController::all(),
            'batteries' => SolarBattery::all()
        ]);
    }
    public function index(){
        return view('admin.categories.index', [
            'categories' => Categories::all()
        ]);
    }
    public function show(Categories $category){
        return view('admin.categories.show', [
            'category' => $category
        ]);
    }

    public function edit(Categories $category){
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }
    public function create(){
        return view('admin.categories.create');
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'name' => 'required|min:6'
        ]);


        Categories::create($formFields);
        return redirect('/admin/categories');
    }
    /**update data */
 

    /*delete fan */
    public function destroy(Categories $category){
        $category->delete();
        return redirect('/admin/categories');
    }

}
