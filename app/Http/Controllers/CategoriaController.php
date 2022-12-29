<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function categoriaproducto($name){
    $productos = DB::table('productos as p')
    ->join('subcategorias as sc','p.subcategoria_id','=','sc.id')
    ->join('categorias as c','sc.categoria_id','=','c.id')
    ->select('p.id as idproducto', 'p.name','p.price','p.image_path',
    'c.nombre as categoria','sc.nombre as subcategoria',
    'p.slug','p.details','p.shipping_cost','p.description','p.brand_id' )
        ->where('c.nombre','=',$name) 
        ->get();
        //return  $productos ;
        return view("pagina/categoriaproducto",['productos' => $productos]);
        
}

public function subcategoriaproducto($name){
    $productos = DB::table('productos as p')
        ->join('subcategorias as sc','p.subcategoria_id','=','sc.id')
        ->join('categorias as c','sc.categoria_id','=','c.id')
        ->select('p.id as idproducto', 'p.name','p.price','p.image_path',
        'sc.nombre as subcategoria','sc.nombre as subcategoria',
        'p.slug','p.details','p.shipping_cost','p.description','p.brand_id' )
        ->where('sc.nombre','=',$name) 
        ->get();
        //return  $productos ;
        return view("pagina/subcategoriaproducto",['productos' => $productos]);
        
}

}