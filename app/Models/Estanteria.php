<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estanteria extends Model
{
    use HasFactory;
    protected $fillable = ['biblioteca_id', 'tema_id', 'codigo'];

    // Relación con biblioteca
    public function biblioteca()
    {
        return $this->belongsTo(Biblioteca::class);
    }

    // Relación con tema
    public function tema()
    {
        return $this->belongsTo(Tema::class);
    }
    public function copias()
    {
        return $this->hasMany(Copia::class);
    }
}
