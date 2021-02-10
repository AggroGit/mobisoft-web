<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class legalController extends Controller
{
    //
    public function aviso()
    {
      return view('legal.aviso');
    }

    public function cookies()
    {
      return view('legal.galletas');
    }

    public function privacidad()
    {
      return view('legal.privacidad');
    }
}
