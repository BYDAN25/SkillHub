<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Horario extends Model
{
    protected $fillable = [
        'clase_id',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'lugares_disponibles'
    ];

    /**
     * Un horario pertenece a una clase.
     */
    public function clase(): BelongsTo
    {
        return $this->belongsTo(Clase::class);
    }

    /**
     * Un horario puede tener muchas reservas.
     */
    public function reservas(): HasMany
    {
        return $this->hasMany(Reserva::class);
    }
}