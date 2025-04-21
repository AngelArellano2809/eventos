<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    /** @use HasFactory<\Database\Factories\AdministradorFactory> */
    use HasFactory;

    protected $table = 'administradores';

    protected $fillable = ['nombre','correo',];

    public function eventos()
    {
        return $this->hasMany(Evento::class);
    }
}
