<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Nacionalidad extends Model
{
    use HasFactory;
    protected  $table = 'nacionalidad';
    public $timestamps = false;
    protected $primaryKey = 'idNacionalidad';
    protected $fillable = [
        "codigo",
        'nombre'
    ];
}
