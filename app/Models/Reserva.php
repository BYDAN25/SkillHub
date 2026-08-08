<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reserva extends Model
{
    protected $fillable = [
        'user_id',
        'horario_id',
        'estado'
    ];

    /**
     * Una reserva pertenece a un usuario.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Una reserva pertenece a un horario.
     */
    public function horario(): BelongsTo
    {
        return $this->belongsTo(Horario::class);
    }
}