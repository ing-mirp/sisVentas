<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    /*use HasFactory;*/
    protected $table='venta';
    protected $primaryKey='idventa';
    public $timestamps=false;//Para agregar 2 culumnas de creación y modificación del registro

    protected $fillable=[
    	'idcliente',
    	'tipo_comprobante',
    	'serie_comprobante',
    	'num_comprobante',
    	'fecha_hora',
    	'impuesto',
    	'total',
    	'estado'
    ];

    protected $guarded=[
    ];
}
