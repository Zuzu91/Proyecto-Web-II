<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class paginicioController extends Controller
{ 

    public function index()
{
    $productos = Producto::paginate(8);
    return view('paginicio', compact('productos'));

}

}
