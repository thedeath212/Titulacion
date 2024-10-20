<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;

    protected $table = 'Docente';
    protected $primaryKey = 'doc_docenteID';
    protected $fillable = [
        'doc_nombre',
        'doc_apellido',
        'doc_email',
        'doc_telefono',
        'doc_especialidad',
        'doc_estado',
    ];
}
