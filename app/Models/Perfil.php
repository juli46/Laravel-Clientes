<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    use HasFactory;

    protected $table = 'perfiles';

    protected $fillable = ['usuario_id', 'descripcion'];

    public function usuario()
    {
        return $this->belongsTo(Usuarios::class);
    }
}

