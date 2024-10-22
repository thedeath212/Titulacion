<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Notifications\Notifiable;

class Institucion extends Authenticatable 
{
    use HasFactory, Notifiable;

    protected $table = 'Institucion';
    protected $primaryKey = 'ins_institucionID';

    // Campos permitidos para asignación masiva
    protected $fillable = [
        'ins_nombre',
        'ins_direccion',
        'ins_telefono',
        'ins_email',
        'ins_estado',
    ];

   
}
