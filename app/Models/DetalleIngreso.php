<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    /*use HasFactory;*/
    protected $table='detalle_ingreso';
    protected $primaryKey='iddetalle_ingreso';
    public $timestamps=false;//Para agregar 2 culumnas de creación y modificación del registro

    protected $fillable=[
    	'idingreso',
    	'idarticulo',
    	'cantidad',
    	'precio_compra',
    	'precio_venta'
    ];

    protected $guarded=[
    ];
}