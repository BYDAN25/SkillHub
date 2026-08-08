<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Reserva;
use App\Models\Horario;
use Illuminate\Http\Request;

class ReservaApiController extends Controller
{
    /**
     * Mostrar todas las reservas.
     */
    public function index()
    {
        return response()->json(
            Reserva::with([
                'user',
                'horario.clase'
            ])->get(),
            200
        );
    }

    /**
     * Mostrar una reserva por ID.
     */
    public function show($id)
    {
        $reserva = Reserva::with([
            'user',
            'horario.clase'
        ])->find($id);

        if (!$reserva) {
            return response()->json([
                'message' => 'Reserva no encontrada.'
            ], 404);
        }

        return response()->json($reserva, 200);
    }

    /**
     * Crear una reserva.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'horario_id' => 'required|exists:horarios,id'
        ]);

        $reserva = Reserva::create([
            'user_id' => $request->user_id,
            'horario_id' => $request->horario_id,
            'estado' => 'Reservada'
        ]);

        return response()->json([
            'message' => 'Reserva creada correctamente.',
            'data' => $reserva
        ], 201);
    }

    /**
     * Reprogramar una reserva.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'horario_id' => 'required|exists:horarios,id'
        ]);

        $reserva = Reserva::find($id);

        if (!$reserva) {
            return response()->json([
                'message' => 'Reserva no encontrada.'
            ], 404);
        }

        $reserva->horario_id = $request->horario_id;
        $reserva->save();

        return response()->json([
            'message' => 'Reserva reprogramada correctamente.',
            'data' => $reserva
        ], 200);
    }

    /**
     * Cancelar una reserva.
     */
    public function destroy($id)
    {
        $reserva = Reserva::find($id);

        if (!$reserva) {
            return response()->json([
                'message' => 'Reserva no encontrada.'
            ], 404);
        }

        $reserva->estado = 'Cancelada';
        $reserva->save();

        return response()->json([
            'message' => 'Reserva cancelada correctamente.'
        ], 200);
    }

    /**
     * Reservas por usuario.
     */
    public function reservasUsuario($id)
    {
        return response()->json(
            Reserva::with('horario.clase')
                ->where('user_id', $id)
                ->get(),
            200
        );
    }

    /**
     * Reservas por clase.
     */
    public function reservasClase($id)
    {
        $reservas = Reserva::whereHas('horario', function ($query) use ($id) {
            $query->where('clase_id', $id);
        })
        ->with([
            'user',
            'horario.clase'
        ])
        ->get();

        return response()->json($reservas, 200);
    }
}