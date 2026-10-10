<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'user_id',
    ];

    /**
     * Un post pertenece a un usuario (1:N inverso)
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Un post tiene y pertenece a muchas etiquetas (N:M)
     */
    public function tags(): BelongsToMany
    {
        // withTimestamps() gestiona created_at y updated_at en post_tag
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}