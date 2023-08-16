<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = ['code', 'finance_category_id', 'cooperative_id', 'year', 'month', 'date', 'amount', 'status', 'description', 'flag'];

    public function financeCategory()
    {
        return $this->belongsTo(FinanceCategory::class);
    }

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }
}
