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

    protected $fillable = ['npm', 'username', 'first_name', 'last_name', 'email', 'password'];
}
