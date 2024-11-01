<?php

namespace App\Models\Common;

use App\Models\Concern\Concern;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $fillable = ['name'];

    public function concerns() #
    {
        return $this->hasMany(Concern::class);
    }
}
