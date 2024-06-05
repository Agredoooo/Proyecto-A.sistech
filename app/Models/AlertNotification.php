<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlertNotification extends Model
{
    use HasFactory;
    public function usuario()
    {
        return $this->belongsTo("App\Models\User");
    }

    public function animal()
    {
        return $this->belongsTo("App\Models\Animal");
    }
}
