<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Importar SoftDeletes
use Illuminate\Database\Eloquent\Relations\BelongsTo; // Importar BelongsTo

class Article extends Model
{
    use HasFactory, SoftDeletes; // Activar SoftDeletes

    protected $fillable = [
        'name',
        'description',
        'content',
        'category_id',
    ];

    
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}