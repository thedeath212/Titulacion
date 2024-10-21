<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'Empresa';
    protected $primaryKey = 'emp_empresaID';
    protected $fillable = [
        'emp_ruc',
        'emp_nombre',
        'emp_direccion',
        'emp_telefono',
        'emp_email',
        'emp_estado',
    ];
}
