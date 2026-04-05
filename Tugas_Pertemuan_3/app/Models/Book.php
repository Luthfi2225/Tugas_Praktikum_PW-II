<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'bookshelf_id',
        'title',
        'author',
        'year',
        'publisher',
        'city',
        'cover'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function bookshelf()
    {
        return $this->belongsTo(Bookshelf::class, 'bookshelf_id', 'id');
    }
}
