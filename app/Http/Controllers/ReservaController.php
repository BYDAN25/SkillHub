<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservaController extends Controller
{
    // Mis reservas activas
    public function index()
    {
        $reservas = Reserva::with('horario.clase')
            ->where('user_id', Auth::id())
            ->where('estado', 'Reservada')
            ->get();

        return view('reservas.index', compact('reservas'));
    }

    // Historial
    public function historial()
    {
        $reservas = Reserva::with('horario.clase')
            ->where('user_id', Auth::id())
            ->whereIn('estado', ['Cancelada', 'Realizada'])
            ->get();

        return view('reservas.historial', compact('reservas'));
    }

    // Crear reserva
    public function store(Request $request)
    {
        Reserva::create([
            'user_id' => Auth::id(),
            'horario_id' => $request->horario_id,
            'estado' => 'Reservada'
        ]);

        return redirect()
            ->route('reservas.index')
            ->with('success', 'Reserva realizada correctamente.');
    }

    // Cancelar reserva
    public function destroy($id)
    {
        $reserva = Reserva::findOrFail($id);

        if ($reserva->user_id != Auth::id()) {
            abort(403);
        }

        $reserva->estado = 'Cancelada';
        $reserva->save();

        return redirect()
            ->route('reservas.index')
            ->with('success', 'Reserva cancelada.');
    }
}