<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Clase extends Model
{
    protected $fillable = [
        'categoria_id',
        'ubicacion_id',
        'nivel_id',
        'nombre',
        'descripcion',
        'instructor',
        'duracion',
        'costo',
        'cupo_maximo',
        'imagen'
    ];

    /**
     * Una clase pertenece a una categoría.
     */
    public function categoria(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    /**
     * Una clase pertenece a una ubicación.
     */
    public function ubicacion(): BelongsTo
    {
        return $this->belongsTo(Ubicacion::class);
    }

    /**
     * Una clase pertenece a un nivel.
     */
    public function nivel(): BelongsTo
    {
        return $this->belongsTo(Nivel::class);
    }

    /**
     * Una clase puede tener muchos horarios.
     */
    public function horarios(): HasMany
    {
        return $this->hasMany(Horario::class);
    }
}