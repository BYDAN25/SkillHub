<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Ubicacion;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function index(Request $request)
    {
        // Obtener todas las ubicaciones para el filtro
        $ubicaciones = Ubicacion::all();

        // Consulta base con relaciones
        $clases = Clase::with([
            'categoria',
            'nivel',
            'ubicacion'
        ]);

        // Aplicar filtro por ubicación si se seleccionó una
        if ($request->filled('ubicacion')) {
            $clases->where('ubicacion_id', $request->ubicacion);
        }

        // Obtener resultados
        $clases = $clases->get();

        return view('clases.index', compact('clases', 'ubicaciones'));
    }

    public function show($id)
    {
        $clase = Clase::with([
            'categoria',
            'nivel',
            'ubicacion',
            'horarios'
        ])->findOrFail($id);

        return view('clases.show', compact('clase'));
    }
}