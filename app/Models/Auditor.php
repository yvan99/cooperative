<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Auditor extends Authenticatable
{
    use HasFactory;
    protected $table ='auditor';
    protected $fillable = ['names', 'telephone', 'email', 'password'];

}
