<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parque extends Model
{
    use HasFactory;

    protected $table = 'TBL_PARQUE';
    protected $primaryKey = 'ID_PARQUE';

    protected $fillable = [
        'NOMBRE_PARQUE',
        'FECHA_VISITA',
        'VALOR_ENTRADA',
        'DIRECCION_PARQUE',
        'RECORRIDO_REALIZADO',
        'KILOMETROS_RECORRIDOS',
    ];


}
