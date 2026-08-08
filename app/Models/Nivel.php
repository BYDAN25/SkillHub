<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Nivel extends Model
{
    protected $table = 'niveles';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];

    /**
     * Un nivel puede tener muchas clases.
     */
    public function clases(): HasMany
    {
        return $this->hasMany(Clase::class);
    }
}