<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany; // Importante importar HasMany

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'Nombre',
        'description',
    ];

    /**
     * Una categoría tiene muchos artículos.
     * ¡AQUÍ ES DONDE VA ESTA FUNCIÓN!
     */
    public function articles(): HasMany
    {
        return $this->hasMany(Article::class);
    }
}