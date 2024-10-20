<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    use HasFactory;

    protected $table = 'Inscripcion';
    protected $primaryKey = 'irs_inscripcionID';
    protected $fillable = [
        'alu_alumnoID',
        'cur_cursoID',
        'irs_fechaInscripcion',
        'irs_estado',
    ];
}
