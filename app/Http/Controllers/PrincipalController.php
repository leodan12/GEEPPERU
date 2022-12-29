<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Principal;

class PrincipalController extends Controller
{
    public function inicio()
    {
        //$principal = Principal::all();
        $principal = Principal::orderBy('id', 'desc')->get();
        //dd($products);
        //$categorias =Categoria::all();
        $categorias =DB::table('categorias as c')
        ->join('subcategorias as sc','sc.categoria_id','=','c.id')
        ->join('productos as p','p.subcategoria_id','=','sc.id')
        ->select('c.id as idcategoria','c.nombre as nombre')->distinct('nombre')
        ->get();

        $productos=DB::table('productos as p')
        ->join('subcategorias as sc','p.subcategoria_id','=','sc.id')  
        ->select(  'p.id','sc.id as idsubcategoria ','sc.categoria_id as idcategoria',
        'p.slug','p.details','p.price','p.shipping_cost','p.description','p.subcategoria_id',
        'p.brand_id','p.image_path','p.name' )->get() ;
        return view('inicio2')->with(['productos' => $productos,'categorias' => $categorias,'principal' => $principal]);
    }
}
