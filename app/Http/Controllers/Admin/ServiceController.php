<?php

namespace App\Http\Controllers\Admin;

use App\Models\Servicecategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class ServiceController extends Controller
{
    public function index(){
        $services = Servicecategory::all();
        return view('admin.services.index')
            ->with('services',$services)
        ;
    }

    public function create(){
        return view('admin.services.create');
    }

    public function store(Request $request){

         $category = new Servicecategory();
         $category->service_name = $request->input('service_name');
         $category->service_description = $request->input('service_description');
         $category->save();

        Session::flash('statuscode','success');
         return redirect('/service-category')->with('status','Category added Successfully');
    }

    public function edit($id){
        $service_category = Servicecategory::find($id);
        return view('admin.services.edit')->with('service_category',$service_category);
    }

    public function update(Request $request, $id){
        $service_category = Servicecategory::find($id);
        $service_category->service_name = $request->input('service_name');
        $service_category->service_description = $request->input('service_description');
        $service_category->update();

        Session::flash('statuscode','success');
        return redirect('service-category')->with('status','Category Updated');
    }

    public function delete($id){
        $service_category = Servicecategory::findorFail($id);
        $service_category->delete();

        return response()->json(['status'=>'Category has been deleted']);
    }
}
