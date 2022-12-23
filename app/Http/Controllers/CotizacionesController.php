<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cotizaciones;
use App\Models\CotizacionesDetalle;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

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
   public function create()
    { 
        $productos = Product::all();
        
        return view("cotizacion/create" ,['productos'=>$productos]);
    }

    public function store(Request $request)
    {
        //Regla de validación
        $rules = [
             'fecha' => 'required|string',
             'nombre' => 'required',
             'documento' => 'required|string',
             'descuento' => 'required',
             'costototal' => 'required'
           
        ];
        //Usamos el Facade Validator para validar nuestra regla respecto a los datos recibidos en Request
        $validator = Validator::make($request->all(), $rules);
        //Si falla la validacion retornamos los errores
        if ($validator->fails()) {
            return $validator->errors();
        }
        //Instancia modelo Gender
        $cotizacion = new Cotizaciones;
        //Llevanos el modelo con los datos del Request
        $cotizacion->fecha = $request->fecha;
        $cotizacion->nombre = $request->nombre;
        $cotizacion->documento = $request->documento;
        $cotizacion->descuento = $request->descuento;
        $cotizacion->costototal = $request->costototal; 
        $cotizacion->estado = "COTIZADO";
        //Guardamos
        if ($cotizacion->save()) {
             
             $respuesta =  1;
             $cantidad=$request->Lcantidad;
             $producto=$request->Lproducto; 
             $preciototal=$request->Lpreciototal; 
 
             if($cantidad !== null) {
                 for ($i = 0; $i < count($cantidad); $i++) {
         
                     $DetalleCotizacion = new CotizacionesDetalle;
                     $DetalleCotizacion->cantidad = $cantidad[$i];
                     $DetalleCotizacion->producto_id = $producto[$i]; 
                     $DetalleCotizacion->preciototal = $preciototal[$i]; 
                     $DetalleCotizacion->cotizacion_id = $cotizacion->id; 
                     $DetalleCotizacion->save();
         
                 }
             }
 
            return redirect('cotizacion/index')->with('respuesta', $respuesta);
        } else {
         
         $respuesta = -1;
         return redirect('cotizacion/index')->with('respuesta', $respuesta);
            
        }
    }

   public function show($id){
    $cotizaciones=DB::table('cotizaciones as c')
        ->join('cotizaciones_detalles as cd','cd.cotizacion_id','=','c.id') 
        ->join('products as p','cd.producto_id','=','p.id')
        ->select(  'c.id as idcotizacion','c.fecha as fecha','c.nombre','c.documento','c.descuento','c.costototal','c.estado'
        ,'cd.cantidad','cd.preciototal','p.name','p.price' )
        ->where('c.id','=',$id)->get()  ;
        return $cotizaciones;
   }
}
