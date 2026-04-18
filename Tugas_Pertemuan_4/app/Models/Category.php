<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    protected $fillable = ['category'];

    public function books(): HasMany
    {
        return $this->hasMany(Book::class, 'category_id');
    }
}
