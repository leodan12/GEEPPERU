@extends('layout.base')
@section('page-info')
<style>
  .product {
    display: inline-block;
    width: 220px;
    text-align: center;
    border: 1px solid #CCCCCC;
    height: 320px;
    margin-right: 5px;
    margin-top: 5px;
     
     
  }
  .product img{
    margin-top:10px;
  }

  
</style>
@endsection
@section('content')
<div class="row justify-content-center"  style="text-align: center;">
  <div class="col">
    <h3>{{$productos[0]->categoria}}</h3>
  </div>
  <hr>
</div>

<div class="row justify-content-center"  style="text-align: center;">
  @foreach($productos as $pro)
  <div class="col-xs-6 col-sm-3 col-md-4 col-lg-2 product">
    <img src="../images/{{$pro->image_path}}" alt="Producto 1" width="100%" height="140px">

    <h5 class="nombreproducto">{{$pro->name}}</h5>
    <span id="price">S/{{$pro->price}}0</span>
    <form action="{{ route('cart.store') }}" method="POST">
      {{ csrf_field() }}
      <input type="hidden" value="{{ $pro->idproducto }}" id="id" name="id">
      <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
      <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
      <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
      <input type="hidden" value="{{ $pro->slug }}" id="slug" name="slug">
      <input type="hidden" value="1" id="quantity" name="quantity">
 
      <a href="#" title="añadir a la lista de deseos" class="btnlist"><i class="fa-solid fa-heart"></i></a>
      <button class="btncart" title="añadir al carrito">
        <i class="fa fa-shopping-cart"></i> AÑADIR AL CARRITO
      </button>


    </form>
  </div>
  @endforeach
</div>


@endsection




@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

@endsection