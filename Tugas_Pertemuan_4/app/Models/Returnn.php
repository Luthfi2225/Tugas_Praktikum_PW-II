<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Returnn extends Model
{
    use HasFactory;

    protected $table = 'returns';

    protected $fillable = [
        'loan_detail_id',
        'charge',
        'amount'
    ];

    public function loanDetail(): BelongsTo 
    {
        return $this->belongsTo(LoanDetail::class, 'loan_detail_id', 'id');
    }
}
