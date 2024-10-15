<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copia extends Model
{
    use HasFactory;

    protected $fillable = ['libro_id', 'estanteria_id', 'numero_copia'];

    // Relación con el libro
    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }

    // Relación con la estantería
    public function estanteria()
    {
        return $this->belongsTo(Estanteria::class);
    }
}
