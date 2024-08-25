<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = ['estimate_id', 'total_amount', 'due_date'];

    public function estimate() {
        return $this->belongsTo(Estimate::class);
    }
}
