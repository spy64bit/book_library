<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'category',
        'published_year',
        'description',
    ];

    public function favouritedBy()
    {
        return $this->belongsToMany(User::class, 'favourites')->withTimestamps();
    }
}
