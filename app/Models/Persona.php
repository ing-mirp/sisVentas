<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    /*use HasFactory;*/
    protected $table='persona';
    protected $primaryKey='idpersona';
    public $timestamps=false;//Para agregar 2 culumnas de creación y modificación del registro

    protected $fillable=[
    	'tipo_persona',
    	'nombre',
    	'tipo_documento',
    	'num_documento',
    	'direccion',
    	'telefono',
    	'email'
    ];

    protected $guarded=[
    ];
}
