<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    
            public function index(Request $variable)
            {
                return view('/profile/view');
            }
}
