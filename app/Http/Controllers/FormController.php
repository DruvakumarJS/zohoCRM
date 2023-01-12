<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Validator;


class FormController extends Controller
{
     public function index()
     {
        return view('form');

     }

     public function store(Request $request)
     {
       
        $formdata=new Form();
        $formdata->name=$request->name;
        $formdata->company_name=$request->company_name;
        $formdata->address=$request->address;
        $formdata->email=$request->email;
        $formdata->contact=$request->contact;
        $formdata->product_name=$request->product;
        $formdata->quantity=$request->quantity;

        if($formdata->save())
        {
            return redirect()->route('form')->with('success' , 'Thank you for your valuable time...');
        }






     }
}
