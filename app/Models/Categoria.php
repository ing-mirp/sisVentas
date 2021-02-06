<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    /*use HasFactory;*/
    protected $table='categoria';
    protected $primaryKey='idcategoria';
    public $timestamps=false;//Para agregar 2 culumnas de creación y modificación del registro

    protected $fillable=[
    	'nombre',
    	'descripcion',
    	'condicion'
    ];

    protected $guarded=[
    ];
}
