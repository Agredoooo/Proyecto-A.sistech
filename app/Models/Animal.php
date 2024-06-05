<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    public function Temperatura()
    {
        return $this->hasMany("App\Models\Temperature");
    }

    public function distribuciones()
    {
        return $this->hasMany("App\Models\Distribution");
    }

    public function alertasNotificaciones()
    {
        return $this->hasMany("App\Models\AlertNotification");
    }
}
