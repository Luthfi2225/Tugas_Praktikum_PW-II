<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LoanDetail extends Model
{
    use HasFactory;

    protected $table = 'loan_detail';

    protected $fillable = [
        'loan_id',
        'book_id',
        'is_return'
    ];

    public function loan(): BelongsTo
    {
        return $this->belongsTo(Loan::class, 'loan_id', 'id');
    }

    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class, 'book_id', 'id');
    }

    public function returnInfo(): HasOne {
        return $this->hasOne(Returns::class, 'loan_detail_id');
    }
}
