<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $fillable = ['lead_id', 'title', 'content', 'amount'];

    public function lead() {
        return $this->belongsTo(Lead::class);
    }

    public function estimates() {
        return $this->hasMany(Estimate::class);
    }
}
