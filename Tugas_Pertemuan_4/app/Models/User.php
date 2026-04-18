<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

// app/Models/Users.php
class User extends Authenticatable
{
    use Notifiable;

    protected $primaryKey = 'npm';
    public $incrementing = false;
    protected $keyType = 'int';

    protected $fillable = [
        'npm',
        'username',
        'first_name',
        'last_name',
        'email',
        'password'
    ];

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->first_name.' '.$this->last_name
        );
    }

    public function loans(): HasMany {
        return $this->hasMany(Loan::class, 'user_npm', 'npm');
    }
}
