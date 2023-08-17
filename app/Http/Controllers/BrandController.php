<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    //
    public function Brands(){
        return view('admin.Brands',[
            "brands"=>Brand::all()
        ]);
    }

    public function Add_brand(Request $request){

        $validator = Validator::make($request->all(), [
            'nom'=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('add_modal', true);

        }else{
            $formFields=$request->validate([
                'nom'=>['required'],
            ]);

            if($request->hasFile('image')){
                $formFields['image']=$request->file('image')->store('brands','public');
            }

           Brand::create($formFields);

           return back()->with('message','Marque crée avec succéss');
        }

    }
    
    public function Edit_brand(Request $request, Brand $brand){

        $validator = Validator::make($request->all(), [
            'nom'=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['edit_modal'=> true, 'id'=>$brand->id]);

        }else{
            $formFields=$request->validate([
                'nom'=>['required'],
            ]);

            if($request->hasFile('image')){
                $formFields['image']=$request->file('image')->store('brands','public');
            }

           $brand->update($formFields);

           return back()->with('message','Marque modifié avec succéss');
        }

    }

    public function delete_brand(Brand $brand){
        $brand->delete();
        return back()->with('message','Marque supprimé avec succés'); 
    }
}
