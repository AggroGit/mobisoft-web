<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class HomeController extends Controller
{
    //
    public function home()
    {
      return view('home');
    }

    public function sendForm(Request $request)
    {
      $form = new form($request->all());
      $form->save();
      return redirect('/')->with('thanks',true);
    }

  
}
