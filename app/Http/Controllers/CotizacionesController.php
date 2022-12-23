<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cotizaciones;
use App\Models\CotizacionesDetalle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CotizacionesController extends Controller
{
    public function index() 
    {
     //$ventas = venta::all();
     $cotizaciones = $this->listar();
      
    // return $cotizaciones;
    return view("cotizacion/index",['cotizaciones'=>$cotizaciones ]) ;
     
    }
    public function listar()
   {
    $cotizaciones=DB::table('cotizaciones as c')
        //->join('cotizaciones_detalles as cd','cd.cotizacion_id','=','c.id') 
        //->join('products as p','cd.producto_id','=','p.id')
        ->select(  'c.id as idcotizacion','c.fecha','c.nombre','c.documento','c.descuento','c.costototal','c.estado'
        //,'cd.cantidad','cd.preciototal','p.name','p.price'
        )
        ->where('c.estado','=','COTIZADO')
        ->orderBy('id', 'desc')->get()  ;
      
    return $cotizaciones;
   }

   public function show($id){
    $cotizaciones=DB::table('cotizaciones as c')
        ->join('cotizaciones_detalles as cd','cd.cotizacion_id','=','c.id') 
        ->join('products as p','cd.producto_id','=','p.id')
        ->select(  'c.id as idcotizacion','c.fecha','c.nombre','c.documento','c.descuento','c.costototal','c.estado'
        ,'cd.cantidad','cd.preciototal','p.name','p.price' )
        ->where('c.id','=',$id)->get()  ;
        return $cotizaciones;
   }
}
