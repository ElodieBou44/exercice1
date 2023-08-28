<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function contactForm(Request $request){
        return view('contact', ['data' => $request]); 
    }
}
