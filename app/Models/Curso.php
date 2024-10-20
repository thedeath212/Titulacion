<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'Curso';
    protected $primaryKey = 'cur_cursoID';
    protected $fillable = [
        'cur_nombre',
        'cur_descripcion',
        'cur_nivel',
        'cur_estado',
        'doc_docenteID',
    ];

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class, 'cur_cursoID', 'cur_cursoID');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'cur_cursoID', 'cur_cursoID');
    }
}
