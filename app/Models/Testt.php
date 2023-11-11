<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Testt extends Authenticatable
{
    use HasFactory, Notifiable;

    // ... other model code ...

    // Make sure this method is implemented in your Testt model
    public function getAuthPassword()
    {
        return $this->password;
    }
}