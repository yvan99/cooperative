<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cooperative extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'address', 'certificate', 'category_id', 'members', 'status'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function owners()
    {
        return $this->belongsToMany(Owner::class, 'cooperative_owners', 'cooperative_id', 'owner_id')
            ->withTimestamps();
    }
}
