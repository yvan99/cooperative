<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceCategory extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'code', 'cooperative_id', 'type', 'status'];

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'finance_category_id');
    }
}
