<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'Evaluacion';
    protected $primaryKey = 'eva_evaluacionID';
    protected $fillable = [
        'eva_fecha',
        'eva_calificacion',
        'eva_estado',
        'cur_cursoID',
        'pla_planificacionID',
    ];
}
