<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'Alumno';
    protected $primaryKey = 'alu_alumnoID';
    protected $fillable = [
        'alu_nombre',
        'alu_apellido',
        'alu_segundoApellido',
        'alu_email',
        'alu_telefono',
        'alu_estado',
        'ins_institucionID',
        'alu_fecha_nacimiento',
        'alu_tipo_documento',
        'alu_numero_documento',
    ];
    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'alu_alumnoID', 'alu_alumnoID');
    }
}
