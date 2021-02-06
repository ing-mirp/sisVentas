<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //use HasFactory;
    protected $table='articulo';
    protected $primaryKey='idarticulo';
    public $timestamps=false;//Para agregar 2 culumnas de creación y modificación del registro

    protected $fillable=[
    	'idcategoria',
    	'codigo',
    	'nombre',
    	'stock',
    	'descripcion',
    	'imagen',
    	'estado'
    ];

    protected $guarded=[
    ];
}
