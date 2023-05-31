<?php

namespace App\Http\Controllers;

use App\Models\SolarFan;
use App\Models\Categories;
use Illuminate\Http\Request;

class FansController extends Controller
{
    
    public function index(){
        return view('admin.fans.index', [
            'fans' => SolarFan::all()
        ]);
    }
    public function show(SolarFan $fan){
        return view('admin.fans.show', [
            'fan' => $fan
        ]);
    }

    public function edit(SolarFan $fan){
        return view('admin.fans.edit', [
            'fan' => $fan
        ]);
    }

    public function create(){
        return view('admin.fans.create',[
            'categories' => Categories::all()
        ]);
    }
    public function store(Request $request){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        SolarFan::create($formFields);
        return redirect('/admin/fans');
    }
    /**update data */
    public function update(Request $request, SolarFan $fan){
        //dd($request->all());
        $formFields = $request->validate([
            'picture' => 'required',
            'name' => 'required',
            'price' => 'required',
            'category' => 'required'
        ]);

        if($request->hasFile('picture')){
            $formFields['picture'] = $request->file('picture')->store('pictures', 'public');
        }
        $fan->create($formFields);
        return redirect('/admin/fans');
    }

    /*delete fan */
    public function destroy(SolarFan $fan){
        $fan->delete();
        return redirect('/admin/fans');
    }

}
