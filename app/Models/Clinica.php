<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinica extends Model
{
    protected $fillable = ['nombre','slug','idpaciente','especialidad','observaciones'];
    public function getRouteKeyName()
    {
       return 'slug';
    }
}
