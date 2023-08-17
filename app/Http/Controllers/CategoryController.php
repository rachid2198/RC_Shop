<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Finalcategory;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    //
    public function Categories(){
        return view('admin.categories',[
            "categories"=>Category::all(),
        ]);
    }

    public function Add_category(Request $request){

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
                $formFields['image']=$request->file('image')->store('categories','public');
            }

           Category::create($formFields);

           return back()->with('message','Catégorie crée avec succéss');
        }

    }
    
    public function Edit_category(Request $request, Category $category){

        $validator = Validator::make($request->all(), [
            'nom'=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['edit_modal'=> true, 'id'=>$category->id]);

        }else{
            $formFields=$request->validate([
                'nom'=>['required'],
            ]);

            if($request->hasFile('image')){
                $formFields['image']=$request->file('image')->store('categories','public');
            }

           //create the category
           $category->update($formFields);

           //login
           return back()->with('message','Catégorie modifié avec succéss');
        }

    }

    public function delete_category(Category $category){
        $category->delete();
        return back()->with('message','Catégorie supprimé avec succés'); 
    }

    // sous catégories ----------------------------------------------------------------------

    public function Subcategories(Category $category){
        $subcategories = Subcategory::where('category_id', $category->id)->get();

        return view('admin.subcategories',[
            'parentCategory'=>$category,
            'subcategories'=>$subcategories
        ]);
    }

    public function Add_subcategory(Request $request){

        $validator = Validator::make($request->all(), [
            'nom'=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('add_modal', true);

        }else{
            $formFields=$request->validate([
                'nom'=>['required'],
            ]);

            $formFields['category_id']=$request['parent'];

           //create the category
           Subcategory::create($formFields);

           return back()->with('message','Sous catégorie crée avec succéss');
        }

    }

    public function Edit_subcategory(Request $request, Subcategory $subcategory){

        $validator = Validator::make($request->all(), [
            'nom'=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['edit_modal'=> true, 'id'=>$subcategory->id]);

        }else{
            $formFields=$request->validate([
                'nom'=>['required'],
            ]);

           //create the category
           $subcategory->update($formFields);

           //login
           return redirect()->back()->with('message','Sous catégorie modifié avec succéss');
        }
    }

    public function delete_subcategory(Subcategory $subcategory){
        $subcategory->delete();
        return back()->with('message','Sous catégorie supprimé avec succés'); 
    }

    //final categories

    public function FinalCategories(Subcategory $subcategory){
        $finalcategories = Finalcategory::where('subcategory_id', $subcategory->id)->get();
        $maincategory= Category::where('id',$subcategory->category_id)->first();

        return view('admin.finalcategories',[
            "mainCategory"=>$maincategory,
            'parentCategory'=>$subcategory,
            'finalcategories'=>$finalcategories
        ]);
    }

    public function Add_finalcategory(Request $request){

        $validator = Validator::make($request->all(), [
            'nom'=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('add_modal', true);

        }else{
            $formFields=$request->validate([
                'nom'=>['required'],
            ]);

            $formFields['subcategory_id']=$request['parent'];

           //create the category
           Finalcategory::create($formFields);

           return back()->with('message','Sous catégorie crée avec succéss');
        }

    }

    public function Edit_finalcategory(Request $request, Finalcategory $finalcategory){

        $validator = Validator::make($request->all(), [
            'nom'=>['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['edit_modal'=> true, 'id'=>$finalcategory->id]);

        }else{
            $formFields=$request->validate([
                'nom'=>['required'],
            ]);

           //create the category
           $finalcategory->update($formFields);

           //login
           return redirect()->back()->with('message','Sous catégorie modifié avec succéss');
        }
    }

    public function delete_finalcategory(Finalcategory $finalcategory){
        $finalcategory->delete();
        return back()->with('message','Sous catégorie supprimé avec succés'); 
    }

}
