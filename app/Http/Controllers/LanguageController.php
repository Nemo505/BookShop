<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Language;

class LanguageController extends Controller
{
   
    public function index()
    {
        $languages = Language::all();
        
        return view('backend.language.list',compact('languages'));
    }

    
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
