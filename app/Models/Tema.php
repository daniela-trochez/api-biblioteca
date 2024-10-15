<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    use HasFactory;

    protected $garded = [];


    public function bibliotecas()
    {
        return $this->belongsToMany(Biblioteca::class);
    }
    public function estanterias()
    {
        return $this->hasMany(Estanteria::class);
    }
}
