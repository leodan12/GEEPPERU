<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!--  iconos de fontawesome-->
    <script src="https://kit.fontawesome.com/a411db0add.js" crossorigin="anonymous"></script>

 

    <link href="{{ asset('miestilo.css') }}" rel="stylesheet" type="text/css" />
    <!-- script para el chatbot 
    <script async>
        (function(w, d) {
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.setAttribute("src", "https://app.bluecaribu.com/conversion/integration/c3276dc9775913859eafadf202459571");
            h.appendChild(s);
        })(window, document);
    </script>-->


    <!-- script para el chatbot

    <link href="https://trial.chatcompose.com/static/trial/all/global/export/css/main.5b1bd1fd.css" rel="stylesheet">    
    <script async type="text/javascript" src="https://trial.chatcompose.com/static/trial/all/global/export/js/main.a7059cb5.js?user=trial_leodan&lang=ES" user="trial_leodan" lang="ES"></script>  
 -->

    <title>GEEPPERU</title>


</head>

<body>

    <nav id="menu">
        <!-- start menu -->
        <ul>
            &nbsp;

            <li id="telefono">
                <a href="#">&nbsp;&nbsp;<i class="fa-solid fa-phone"></i> +51 936108792</a>
            </li>

            <li id="direccion">
                <a href="mailto:@ventas@geepperu.com"> &nbsp;&nbsp;<i class="fa-solid fa-envelope"></i> ventas@geepperu.com</a>
            </li>
            <li  style="float:right">
            &nbsp;&nbsp;&nbsp;&nbsp;
            </li>
            <li  style="float:right">
                <a> &nbsp;&nbsp;
                    Mi Cuenta▼
                </a>
                <ul>
                    <li><a href="#">Ingresar</a></li>
                    <li><a href="#">Mi Cuenta</a></li>
                    <li><a href="#">Mi Carrito</a></li>
                    <li><a href="#">Pagar</a></li>

                </ul>
            </li>
            <li style="float:right">
                <a href="#"> &nbsp;&nbsp;
                    Lista de deseos</a>
            </li>


            
           


        </ul>

        <!-- end menu -->
    </nav>

    <nav id="menu3">

        <a href="/">
            <img src="{{ asset('imgs/geepperu2.png') }}" title="geepperu" alt="geepperu" />
        </a>

        <ul >
            <li id="inicioN"  >
                <a href="/">&nbsp;&nbsp; INICIO</a>
            </li>

            <li>
                <a>&nbsp;&nbsp;
                    CATEGORIAS
                </a>
                <ul id="optionmenu">
                    <li><a href="#">PC DE ESCRITORIO</a></li>
                    <li><a href="#">LAPTOPS</a></li>
                    <li><a href="#">IMPRESORAS</a></li>

                </ul>
            </li>
            <li id="nosotrosN">
                <a>&nbsp;&nbsp;
                    NOSOTROS
                </a>
                <ul id="optionmenu">
                    <li><a href="/nosotros">Quienes Somos</a></li>
                    <li><a href="/trayectoria">Nuestra Trayectoria</a></li>
                    <li><a href="/principios">Nuestros Principios</a></li>

                </ul>
            </li>
            <li id="serviciosN">
                <a>&nbsp;&nbsp;
                    SERVICIOS
                </a>
                <ul id="optionmenu">
                    <li><a href="#">VENTA DE COMPUTADORAS</a></li>
                    <li><a href="#">SERVICIO TECNICO</a></li>

                </ul>
            </li>
            <li>
                <a href="">&nbsp;&nbsp; OFERTAS</a>
            </li>
            <li id="contact">
                <a href="">&nbsp;&nbsp; CONTACTANOS</a>
            </li>
            <li>
                <a>&nbsp;&nbsp;
                    <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                </a>
                <ul id="cart">
                    @include('partials.cart-drop')
                </ul>
            </li>


        </ul>


    </nav>

    <div class="container">
        <!-- SLOGAN -->

        @yield('content')
    </div>

    <!-- START FOOTER -->
    <div id="servicios">
        <br>
        <div class="container">
            <div class="row justify-content-center" style="text-align: center;">
                <div class="col col-xs-6 col-md-3 col-sm-4 col-lg-2">
                    <ul>
                        <i class="fa-solid fa-chart-line  "></i>
                        <br>
                        <h6>Alta Calidad</h6>
                        <p>Contamos con la mejor tecnología nacional e internacional</p>
                    </ul>

                </div>
                <div class="col col-xs-6 col-md-3 col-sm-4 col-lg-2">
                    <ul>
                        <i class="fa-solid fa-headset"></i>
                        <br>
                        <h6>Soporte Online</h6>
                        <p>Contamos con personal profesional para ayudarlo</p>
                    </ul>
                </div>
                <div class="col col-xs-6 col-md-3 col-sm-4 col-lg-2">
                    <ul>
                        <i class="fa-solid fa-truck"></i>
                        <br>
                        <h6>Llegamos a tu Casa</h6>
                        <p>Te protegemos!, por eso llegamos hasta la puerta de tu casa</p>
                    </ul>
                </div>
                <div class="col col-xs-6 col-md-3 col-sm-4 col-lg-2">
                    <ul>
                        <i class="fa-solid fa-user-shield"></i>
                        <br>
                        <h6>Garantia</h6>
                        <p>Todos nuestros productos y servicios están garantizados</p>
                    </ul>
                </div>
                <div class="col col-xs-6 col-md-3 col-sm-4 col-lg-2">
                    <ul>
                        <i class="fa-solid fa-lock"></i>
                        <br>
                        <h6>Pago Seguro</h6>
                        <p>Contamos con la mayor seguridad para tus compras en linea</p>
                    </ul>

                </div>
            </div>

        </div>
    </div>
    <div id="nosotros">

        <div class="container">
            <div class="row justify-content-center" style="text-align: lefth;">
                <div class="col col-xs-6 col-md-3 col-sm-4   ">
                    <br>
                    <h6> ¿PORQUE ELEGIRNOS?</h6>
                    <ul>
                        <a href="/nosotros">
                            <li> Nuestra Empresa </li>
                        </a>
                        <a href="/trayectoria">
                            <li> Nuestra Trayectoria </li>
                        </a>
                        <a href="#">
                            <li> Nuestras Distinciones </li>
                        </a>
                        <a href="/principios">
                            <li> Nuestros Principios </li>
                        </a>
                    </ul>
                </div>
                <div class="col col-xs-6 col-md-3 col-sm-4  ">
                    <br>
                    <h6> POLITICAS</h6>
                    <ul>
                        <a href="#">
                            <li> Politica de Devoluciones </li>
                        </a>
                        <a href="#">
                            <li> Politica de Privacidad </li>
                        </a>
                        <a href="#">
                            <li> Politicas Comerciales </li>
                        </a>
                        <a href="#">
                            <li> Politica de Darantias </li>
                        </a>
                        <a href="#">
                            <li> Politica de Envios </li>
                        </a>
                    </ul>
                </div>
                <div class="col col-xs-6 col-md-3 col-sm-4   ">
                    <br>
                    <h6> SERVICIOS</h6>
                    <ul>
                        <a href="#">
                            <li> Soporte </li>
                        </a>
                        <a href="#">
                            <li> Ventas Tienda</li>
                        </a>
                        <a href="#">
                            <li> Ventas Online </li>
                        </a>
                        <a href="#">
                            <li> Reclamaciones </li>
                        </a>
                        <a href="/preguntasfrecuentes">
                            <li> Preguntas Frecuentes </li>
                        </a>
                    </ul>
                </div>
                <div class="col col-xs-6 col-md-3 col-sm-4  ">
                    <br>
                    <h6> CONTACTANOS!</h6>
                    <p> Con gusto nuestros ejecutivos especializados atenderán tus dudas, recibirán tus comentarios.</p>

                    <ul style="list-style-type: none;">
                        <a href="">
                            <li> <i class="fa-solid fa-location-dot"></i>Jirón Francisco Pizarro 203, Trujillo </li>
                        </a>
                        <a href="">
                            <li> <i class="fa-solid fa-phone"></i>936108792</li>
                        </a>
                        <a href="">
                            <li> <i class="fa-solid fa-envelope"></i>ventas@geepperu.com </li>
                        </a>
                    </ul>
                </div>

            </div>
        </div>
        <hr />
        <div style="text-align: center;">

            <a><strong>2022© Todos los derechos reservados</strong></a> &nbsp - &nbsp


            <a><strong>Hecho por TPF</strong></a>

        </div>

    </div>
    <!-- END FOOTER -->

    <!-- START COPYRIGHT -->



    <!--  js de bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="{{ asset('jsgeep/nav.js') }}"></script>
    <script>

    </script>
    @yield('script')
</body>


</html>