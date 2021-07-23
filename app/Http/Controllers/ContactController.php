<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {   $inputs = Contact::all();
        return view('index');
    }


    public function send(Request $request)
    {
         $rules =
        [
        'name' => 'required',
        'email' => 'required|email'
        ];
        $this->validate($request, $rules);

        $inputs = $request->all();
        $inputs->name = $request->name;
        $inputs->email = $request->email;
        $inputs->save();
        return view('thanks');
    }
}