<?php

namespace App\Http\Controllers;

use App\Models\Wilaya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WilayaController extends Controller
{
    public function Wilayas()
    {
        return view('admin.wilayas', [
            "wilayas"=>Wilaya::all(),
        ]);
    }

    public function add_wilaya(Request $request)
    {

        $rules=[
            'code' => ['required'],
            'nom' => ['required'],
            'domicile' => ['required'],
            'stop_desk' => ['required'],
        ];

        $validator = Validator::make($request->all(), 
            $rules
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('add_modal', true);

        } else {
            $formFields = $request->validate($rules);

            Wilaya::create($formFields);

            return back()->with('message', 'Wilaya crée avec succéss');
        }

    }

    public function Edit_wilaya(Request $request, Wilaya $wilaya)
    {
        $rules=[
            'code' => ['required'],
            'nom' => ['required'],
            'domicile' => ['required'],
            'stop_desk' => ['required'],
        ];

        $validator = Validator::make($request->all(),
            $rules
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with(['edit_modal' => true, 'id' => $wilaya->id]);

        } else {
            $formFields = $request->validate($rules);

            $wilaya->update($formFields);

            return redirect()->back()->with('message', 'Wilaya modifié avec succéss');
        }
    }

    public function delete_wilaya(Wilaya $wilaya)
    {
        $wilaya->delete();
        return back()->with('message', 'Wilaya supprimé avec succés');
    }
}