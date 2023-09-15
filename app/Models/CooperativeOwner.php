<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CooperativeOwner extends Model
{
    use HasFactory;
    protected $fillable = ['cooperative_id', 'leader_id'];
}
