<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;

    protected $fillable = ['proposal_id', 'estimated_cost', 'details'];

    public function proposal() {
        return $this->belongsTo(Proposal::class);
    }

    public function invoice() {
        return $this->hasOne(Invoice::class);
    }
}
