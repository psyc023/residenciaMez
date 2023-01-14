<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('contacto');
    }
}
