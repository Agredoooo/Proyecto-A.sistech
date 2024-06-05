<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aliment extends Model
{
    use HasFactory;
    public function distribuciones()
    {
        return $this->hasMany("App\Models\Distribution");
    }
}
