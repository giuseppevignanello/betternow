<?php

namespace App\Models\Concern;

use App\Models\Common\RiskLevel;
use Illuminate\Database\Eloquent\Model;

class Concern extends Model
{
    protected $fillable = ['title', 'text', 'expected_resolution_date', 'risk_level_id', 'status_id'];

    public function riskLevel()
    {
        return $this->belongsTo(RiskLevel::class);
    }
}
