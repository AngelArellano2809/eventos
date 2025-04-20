<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    /** @use HasFactory<\Database\Factories\EventoFactory> */
    use HasFactory;

    protected $fillable = ['nombre', 'creditos', 'dia'];

    public function docente()
    {
        return $this->belongsTo(Administrador::class);
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class);
    }
}
