<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'name', 'cooperative_id', 'description', 'status','amount'];
    
    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }
}
