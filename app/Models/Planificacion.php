<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planificacion extends Model
{
    use HasFactory;

    protected $table = 'Planificacion';
    protected $primaryKey = 'pla_planificacionID';
    protected $fillable = [
        'pla_fechaInicio',
        'pla_fechaFin',
        'pla_estado',
    ];
}
