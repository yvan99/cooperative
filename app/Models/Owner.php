<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Owner extends Authenticatable
{
    use HasFactory;
    public $table = 'leaders';
    protected $fillable = ['names', 'telephone', 'email', 'password', 'status'];

    public function cooperatives()
    {
        return $this->belongsToMany(Cooperative::class, 'cooperative_owners', 'leader_id', 'cooperative_id')
            ->withTimestamps();
    }
}
