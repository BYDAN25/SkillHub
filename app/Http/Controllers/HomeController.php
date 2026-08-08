<?php

namespace App\Http\Controllers;

use App\Models\Clase;

class HomeController extends Controller
{
    public function index()
    {
        $clases = Clase::with(['categoria', 'nivel', 'ubicacion'])->get();

        return view('home', compact('clases'));
    }
}