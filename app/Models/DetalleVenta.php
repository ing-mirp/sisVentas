<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVenta extends Model
{
    /*use HasFactory;*/
    protected $table='detalle_venta';
    protected $primaryKey='iddetalle_venta';
    public $timestamps=false;//Para agregar 2 culumnas de creación y modificación del registro

    protected $fillable=[
    	'idventa',
    	'idarticulo',
    	'cantidad',
    	'precio_venta',
    	'descuento'
    ];

    protected $guarded=[
    ];
}
