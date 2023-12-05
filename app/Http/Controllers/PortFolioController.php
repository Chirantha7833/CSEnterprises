<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PortFolioController extends Controller
{
    public function portfolio()
    {
        return view('portfolio');
    }
  

}