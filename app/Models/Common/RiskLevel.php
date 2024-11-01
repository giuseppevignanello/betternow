<?php

namespace App\Models\Common;

use App\Models\Concern\Concern;
use Illuminate\Database\Eloquent\Model;

class RiskLevel extends Model
{
    protected $fillable = ['name'];

    public function concern()
    {
        return $this->hasMany(Concern::class);
    }
}
