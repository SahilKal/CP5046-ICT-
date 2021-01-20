<?php

namespace App\Http\Controllers\Admin;

use App\Models\Abouts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = Abouts::all();
        return view('admin.aboutus')
            ->with('aboutus',$aboutus);
    }

    public function edit($id){

         $aboutus = Abouts::findOrFail($id);
        return view('admin.abouts.edit')
            ->with('aboutus',$aboutus);
    }

    public function update(Request $request, $id){
        
        $aboutus = Abouts::findorFail($id);
        $aboutus->title = $request->input('title');
        $aboutus->subtitle = $request->input('subtitle');
        $aboutus->description = $request->input('description');

        $aboutus->update();

        return redirect('abouts')->with('status','Data is updated');
    }
}
