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

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function bookshelf(): BelongsTo
    {
        return $this->belongsTo(Bookshelf::class);
    }

    public function loanDetails(): HasMany
    {
        return $this->hasMany(LoanDetail::class);
    }
}
