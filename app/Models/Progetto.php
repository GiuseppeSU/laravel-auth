<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Progetto extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'cover_image',
        'content',
        'slug'
    ];


    public static function generateSlug(string $title)
    {
        return Str::slug($title, '-');
    }
}