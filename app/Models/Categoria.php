<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categoria extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Una categoría puede tener muchas clases.
     */
    public function clases(): HasMany
    {
        return $this->hasMany(Clase::class);
    }
}