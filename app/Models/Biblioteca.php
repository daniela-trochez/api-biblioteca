<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biblioteca extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function temas()
    {
        return $this->belongsToMany(Tema::class);
    }


    public function estanterias()
    {
        return $this->hasMany(Estanteria::class);
    }
}
