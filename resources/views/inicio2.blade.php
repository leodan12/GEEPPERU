@extends('layout.base')
@section('page-info')
<style>
 
.imagencarrusel {
    width: 100%;
    height: 400px;
} 

 @media screen and (max-width: 991px) {
    .imagencarrusel {
        height:  300px ; 
        width: 100% ;
    }
}
@media screen and (max-width: 767px) {
    .imagencarrusel {
        height:  250px ; 
        width: 100% ;
    }
}
@media screen and (max-width: 480px) {
    .imagencarrusel {
        height:  200px ; 
        width: 100% ;
    }
}
@media screen and (max-width: 430px) {
    .imagencarrusel {
        height:  180px ; 
        width: 100% ;
    }
}
@media screen and (max-width: 360px) {
    .imagencarrusel {
        height:  150px ; 
        width: 100% ;
    }
}

</style>
@endsection
@section('content') 
<div id="carouselExampleInterval" class="carousel slide " data-bs-ride="carousel">
<div class="carousel-indicators">
@php $contp=0;   @endphp
@foreach($principal as $item)
    @if( $contp == 0)
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$contp}}" class="active" aria-current="true" aria-label="Slide 1"></button>
    @else
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{$contp}}" aria-label="Slide 2"></button>
    @endif 
    @php $contp++;   @endphp
@endforeach
</div>
  <div class="carousel-inner">
  @php $contp2=0;   @endphp
    @foreach($principal as $item)
    @if( $contp2 == 0)
    <div class="carousel-item active" data-bs-interval="4000">
      <img src="principal/{{$item->imagen}}" class="d-block w-100 imagencarrusel" alt="..." >
    </div>
    @else
    <div class="carousel-item" data-bs-interval="4000">
      <img src="principal/{{$item->imagen}}" class="d-block w-100 imagencarrusel" alt="..."  >
    </div>
    @endif
    @php $contp2++;   @endphp
    @endforeach 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

 
@php $contc=0; @endphp
@foreach($categorias as $cat)
<div id="carruselc" class="carruselc">
    <a href="#" class="left-arrow" id="left_arrow_{{$cat->idcategoria}}" data-cont="{{$contc}}"><img src="carrusel/left-arrow.png" /></a>
    <a href="#" class="right-arrow" id="right_arrow_{{$cat->idcategoria}}" data-cont="{{$contc}}"><img src="carrusel/right-arrow.png" /></a>
    <button id="btncategoria" onclick="window.location.href = '/categoria-producto/{{$cat->nombre}}'" >  <b> {{$cat->nombre}} </b>  </button> 
    <hr>
    <div class="carrusel_{{$contc}}" id="carruselp">
    @php $cont=0; @endphp
    @foreach($productos as $pro)
    @if($pro->idcategoria == $cat->idcategoria)
        <div class="product" id="product_{{$contc}}_{{$cont}}">
            <img src="images/{{$pro->image_path}}" /> <br> <br>
            <a  href="#" class="productname"  >  <h5  class="nombreproducto"  > {{ $pro->name }}</h5>  </a>  
            <span id="price">   S/{{$pro->price}}  </span>
             
            <form action="{{ route('cart.store') }}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                            <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                            <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                             
                            <input type="hidden" value="1" id="quantity" name="quantity">
                             
                                 
                                
                                    <a href="#" title="añadir a la lista de deseos"  class="btnlist"><i class="fa-solid fa-heart"></i></a>
                                    <button class="btncart"   title="añadir al carrito">
                                        <i class="fa fa-shopping-cart"></i> AÑADIR AL CARRITO  
                                    </button>
                                
                            
                        </form>
        </div>
    @php $cont=$cont+1; @endphp 
    @endif
    @endforeach         
    </div>
    
</div> 
@php $contc=$contc+1; @endphp 
@endforeach  


@endsection




@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
 
<script>
    
var current = 0;
var imagenes = new Array();
/*var categorias = @json($categorias);
var productos = @json($productos);

    for(var j = 0; j < categorias.length; j++){
        $contc=0;
        for(var i = 0; i < productos.length; i++){
            if(productos[i].idcategoria == categorias[j].idcategoria){
                $contc=$contc+1;
            }  
        }
        if ($contc <= 5) {
                console.log($contc);
                $('#right_arrow_'+categorias[j].idcategoria).css('display', 'none');
                $('#left_arrow_'+categorias[j].idcategoria).css('display', 'none');
            }
    }*/

$(document).ready(function() {
    var numImages = 6;
    if (numImages <= 3) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
 
    $('.left-arrow').on('click',function() {
        $cont = $(this).data("cont");
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
        }
 
        $('.carrusel_'+$cont).animate({"left": -($('#product_'+$cont+'_'+current).position().left)}, 600);
 
        return false;
    });
 
    $('.left-arrow').on('hover', function() {
        $cont = $(this).data("cont");
        $('#right_arrow_'+$cont).css('opacity','0.5');
        //$(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('hover', function() {
        $cont = $(this).data("cont");
        $('#right_arrow_'+$cont).css('opacity','0.5');
        //$(this).css('opacity','0.5');
       
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('click', function() {
        $cont = $(this).data("cont");
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
        }
 
        $('.carrusel_'+$cont).animate({"left": -($('#product_'+$cont+'_'+current).position().left)}, 600);
 
        return false;
    }); 

    
 });
</script>
@endsection