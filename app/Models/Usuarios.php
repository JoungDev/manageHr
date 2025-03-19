<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;
    protected  $table = 'usuarios';
    public $timestamps = false;
    protected $primaryKey = 'numDocumento';
    protected $fillable = [
        'primerNombre',
        'segundoNombre',
        'primerApellido',
        'segundoApellido',
        'clave',
        'fechaNac',
        'numHijos',
        'contactoEmergencia',
        'numContactoEmergencia',
        'correo',
        'direccion',
        'telefono',
        'nacionalidadId',
        'epsCodigo',
        'generoId',
        'tipoDocumentoId',
        'estadoCivilId',
        'pensionesCodigo'
    ];
}
