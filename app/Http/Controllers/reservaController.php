<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservaController extends Controller
{
    public function index()
    {
        return view('reserva');
    }
}
