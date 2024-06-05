<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;
    public function animal()
    {
        return $this->belongsTo("App\Models\Animal");
    }

    public function alimento()
    {
        return $this->belongsTo("App\Models\Aliment");
    }

    public function agua()
    {
        return $this->belongsTo("App\Models\Water");
    }

}

