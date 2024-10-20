<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    use HasFactory;

    protected $table = 'Institucion';
    protected $primaryKey = 'ins_institucionID';
    protected $fillable = [
        'ins_nombre',
        'ins_direccion',
        'ins_telefono',
        'ins_email',
        'ins_estado',
    ];
}
