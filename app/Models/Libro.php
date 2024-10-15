<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'fecha_publicacion', 'autor_id', 'estanteria_id'];

    // Relación con el autor
    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    // Relación con la estantería
    public function estanteria()
    {
        return $this->belongsTo(Estanteria::class);
    }
}
