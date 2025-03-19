<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tipopermiso extends Model
{
    use HasFactory;
    protected  $table = 'tipopermiso';
    public $timestamps = false;
    protected $primaryKey = 'idTipoPermiso';
    protected $fillable = [
        'nomTipoPermiso	',
    ];
}
