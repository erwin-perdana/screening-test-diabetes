<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComproController extends Controller
{
    public function home(){
        return view('compro.index');
    }
}
