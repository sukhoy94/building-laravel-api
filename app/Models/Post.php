<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $hidden = [
        'created_at',
        'updated_at',
        'author_id',
    ];

    protected $fillable = [
        'author_id',
        'title',
        'content',
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }
}
