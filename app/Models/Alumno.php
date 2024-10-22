<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alumno extends Authenticatable
{
    use HasFactory;

    protected $table = 'Alumno';  // Nombre de la tabla
    protected $primaryKey = 'alu_alumnoID';  // Llave primaria personalizada

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

    public function getAuthIdentifierName()
    {
        return 'alu_email';  
    }

    public function getAuthIdentifier()
    {
        return $this->alu_email; 
    }

    public function getAuthPassword()
    {
        return null;  
    }

   
}
