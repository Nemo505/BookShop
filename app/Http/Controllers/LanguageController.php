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
        return view('backend.Language.new');
    }

    
    public function store(Request $request)
    {
        $validator = $request->validate([
            'name' => ['required', 'min:3', 'max:100', 'unique:languages']
        ]);
        $language = new Language();
        $language->name = $request->name;
        $language->save();

        return redirect()->route('language.index')->with('successMsg', 'New language is ADDED in your data.');
    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $language = Language::find($id);
        return view('backend.language.edit', compact('language'));
    }

    
    public function update(Request $request, $id)
    {
        $name = $request->name;
        $data = [
            'name' => $name
        ];

        Language::where('id',$id)->update($data);
        return redirect()->route('language.index')->with('successMsg', 'Existing language is UPDATEDED in your data.');
    }

    
    public function destroy($id)
    {
        $language = Language::find($id);
        $language->delete();

        return redirect()->route('language.index')->with('successMsg','Existing language is DELETED in your data');
    }
}
