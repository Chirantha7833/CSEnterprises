<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResponseController extends Controller
{
    public function success()
    {
        return view('response.success');
    }

    public function failed()
    {
        return view('response.failed');
    }
}
