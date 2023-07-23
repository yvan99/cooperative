<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
    use HasFactory;
    protected $fillable = ['names', 'telephone', 'email', 'password', 'status'];

    public function cooperatives()
    {
        return $this->belongsToMany(Cooperative::class, 'cooperative_owners', 'owner_id', 'cooperative_id')
            ->withTimestamps();
    }
}
