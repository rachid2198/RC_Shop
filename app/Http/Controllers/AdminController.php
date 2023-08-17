<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

    // gestion utilisateurs------------------------------------------------------

    public function login(){
        return view('admin.Login');
    }

    public function authenticate(Request $request){
        $formFields=$request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

        if(auth()->attempt($formFields)){
            $request->session()->regenerate();

            return redirect('/admin/utilisateurs')->with('message','Authentifié avec succéss');
        }

        return back()->withErrors(['failed'=>'vos informations sont invalides']);
    }

    public function logout(Request $request){
        auth()->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/dashboard')->with('message','You have been logged out');
    }

    public function Users(){
        return view('admin.Users',[
            'users'=> User::where('is_superAdmin',FALSE)->get(),
        ]);
    }

    public function Add_user(Request $request){

        $validator = Validator::make($request->all(), [
            'name'=>['required','min:3'],
            'email'=>['required','email',Rule::unique('users','email')],
            'password'=>['required','confirmed','min:6']
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('add_modal', true);
        }else{
            $formFields=$request->validate([
                'name'=>['required','min:3'],
                'email'=>['required','email',Rule::unique('users','email')],
                'password'=>['required','confirmed','min:6']
            ]);

            //hash passwords
            $formFields['password']=bcrypt($formFields['password']);

           //create user
           $user= User::create($formFields);

           //login
           return back()->with('message','Utilisateur crée avec succéss');
        }

    }

    public function Edit_user(Request $request, User $user){
        $validator = Validator::make($request->all(), [
            'name'=>['required','min:3'],
            'email'=>['required','email'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['edit_modal'=> true, 'id'=>$user->id]);
        }else{
            $formFields= $request->validate([
                'name'=>['required','min:5'],
                'email'=>['required','email'],
            ]);
    
            $user->update($formFields);
    
            return back()->with('message','Utilisateur modifié avec succéss');
        }
    }

    public function delete_user(User $user){
        $user->delete();
        return back()->with('message','Utilisateur supprimé avec succés'); 
    }
    
    public function dashboard(){
        return view('admin.Dashboard');
    }

}
