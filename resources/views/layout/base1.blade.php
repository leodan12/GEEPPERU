<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 
<!-- START HEAD -->

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>GEEP PERU</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!--  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- estilos para la barra del navegador -->
    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- estilos para el pie de pagina -->
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all" />
    <!-- estilos para hacer responsive la pagina -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" media="all" />

    <!-- estilos para las imagenes del pie de pagina -->
    <link rel='stylesheet' id='shortcode-css' href="{{ asset('css/shortcodes.css') }}" type='text/css' media='all' />

</head>
<!-- END HEAD -->
<!-- START BODY -->

<body class="home page no_js responsive stretched">

    <!-- START BG SHADOW -->
    <div class="bg-shadow">

        <!-- START WRAPPER -->
        <div id="wrapper" class="container group">
            <!-- START TOP BAR -->

            <!-- START TOP BAR -->
            <div id="topbar">
                <div class="container">
                    <div class="row">
                        <div id="last-tweets-3" class="widget-first span6 widget last-tweets">
                            <h3>Last Tweets</h3>
                            <div class="list-tweets-3"></div>

           

                        </div>

                        <div id="text-8" class=" widget-last span6 widget widget_text">
                            <div class="textwidget">
                                <a href="# " class="socials-small facebook-small" title="Facebook">facebook</a>

                                <a href="#" class="socials-small rss-small" title="Rss">rss</a>

                                <a href="#" class="socials-small twitter-small" title="Twitter">twitter</a>

                                <a href="#" class="socials-small google-small" title="Google">google</a>

                                <a href="#" class="socials-small linkedin-small" title="Linkedin">linkedin</a>

                                <a href="#" class="socials-small pinterest-small" title="Pinterest">pinterest</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <!-- END TOP BAR -->

            <!-- START HEADER -->
            <div id="header" class="group">
                <div class="group container">
                    <div class="row">
                        <div class="span12">

                            <div class="row">
                                <!-- START LOGO -->
                                <div id="logo" class="span4 group">
                                    <a id="logo-img" href="/" title="celestino">
                                        <img src="{{ asset('imgs/geepperu2.png') }}" title="geepperu" alt="geepperu" width="160px" />
                                    </a>

                                    <p id="tagline">La mejor tecnologia cerca de ti </p>
                                </div>
                                <!-- END LOGO -->
                                <div id="menu" class="span8 group">
                                    <!-- START MAIN NAVIGATION -->
                                    <div class="menu">
                                        <ul id="nav" class="sf-menu">
                                            <li class="nav-icon-hi current_page_item">
                                                <a href="index.html">
                                                    Inicio
                                                    <div style="position:absolute; left: 50%;">
                                                        <span class="triangle">&nbsp;</span>
                                                    </div>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li class="nav-icon-open-small">
                                                        <a href="home-ii.html">
                                                            Home Version II
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-icon-folder-small">
                                                        <a href="home-iii.html">
                                                            Home Version III
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="nav-icon-monitor">
                                                <a href="#">
                                                    Categorias
                                                    <div style="position:absolute; left: 50%;">
                                                        <span class="triangle">&nbsp;</span>
                                                    </div>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="revolution-slider.html">
                                                            Pc de escritorio
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="images-grid.html">Laptops
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="sliders-thumbnails.html">Celulares
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="nav-icon-doc">
                                                <a href="#">
                                                    Servicios
                                                    <div style="position:absolute; left: 50%;">
                                                        <span class="triangle">&nbsp;</span>
                                                    </div>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="portfolio-pinterest-style.html">
                                                            Portfolio Pinterest Style
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="portfolio-slide-detail.html">
                                                            Portfolio Slide Detail
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="nav-icon-works">
                                                <a href="#">
                                                    Nosotros
                                                    <div style="position:absolute; left: 50%;">
                                                        <span class="triangle">&nbsp;</span>
                                                    </div>
                                                </a>
                                                <ul class="sub-menu">

                                                    <li class="nav-icon-team-small ">
                                                        <a href="pages-about.html">
                                                            About
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="nav-icon-bubble-small ">
                                                        <a href="pages-testimonials.html">
                                                            Testimonials
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-icon-newspaper">
                                                <a href="#">
                                                    Ofertas
                                                    <div style="position:absolute; left: 50%;">
                                                        <span class="triangle">&nbsp;</span>
                                                    </div>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="blog-big-image.html">
                                                            Big image
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-small-image.html">
                                                            Small image
                                                            <div style="position:absolute; left: 50%;">
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="nav-icon-lab">
                                                <a href="#">
                                                    Contactanos
                                                    <div style="position:absolute; left: 50%;">
                                                        <span class="triangle">&nbsp;</span>
                                                    </div>
                                                </a>
                                                <ul class="sub-menu">
                                                    <li>
                                                        <a href="sc-typography.html">
                                                            Typography
                                                            <div>
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="sc-icon-section.html">
                                                            Icon section
                                                            <div>
                                                                <span class="triangle">&nbsp;</span>
                                                            </div>
                                                        </a>
                                                    </li>

                                                </ul>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="badge badge-pill badge-dark">
                                                        <i class="fa fa-shopping-cart"></i> {{ \Cart::getTotalQuantity()}}
                                                    </span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="width: 450px; padding: 0px; border-color: #9DA0A2">
                                                    <ul class="list-group" style="margin: 20px;">
                                                        @include('partials.cart-drop')
                                                    </ul>

                                                </div>
                                            </li>

                                        </ul>
                                    </div>
                                    <!-- END MAIN NAVIGATION -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="border-header"></div>
            </div>
            <!-- END HEADER -->



            <!-- START PAGE META -->

            <div id="page-meta" class="container">
                <!-- SLOGAN -->

                @yield('content')
            </div>
            <!-- END PAGE META -->


        </div>
        <!-- START COMMENTS -->
        <div id="comments"></div>
        <!-- END COMMENTS -->
    </div>
    <!-- END CONTENT -->

    <!-- START EXTRA CONTENT -->
    <!-- END EXTRA CONTENT -->

    </div>
    </div>
    </div>
    <!-- END PRIMARY -->



    <!-- START FOOTER -->
    <div id="footer">
        <div class="container">
            <!-- START PRIMARY -->


            <p>&nbsp;</p>



            <div class="one-fourth ">
                <div class="nuestros-servicios">
                    <img src="{{ asset('images/25.jpg') }}" alt="" width="52" height="52" />
                    <br>
                    <span class="servicio"> ALTA CALIDAD</span>
                    <p>Contamos con la mejor tecnología nacional e internacional</p>

                </div>
            </div>

            <div class="one-fourth ">
                <div class="nuestros-servicios">
                    <img src="{{ asset('images/110.jpg') }}" alt="" width="52" height="52" />
                    <br>
                    <span class="servicio"> SOPORTE ONLINE</span>
                    <p>Contamos con personal profesional para ayudarlo</p>
                </div>
            </div>

            <div class="one-fourth ">
                <div class="nuestros-servicios">
                    <img src="{{ asset('images/31.jpg') }}" alt="" width="52" height="52" />
                    <br>
                    <span class="servicio"> LLEGAMOS A TU CASA</span>
                    <p>Te protegemos!, por eso llegamos hasta la puerta de tu casa</p>
                </div>
            </div>

            <div class="one-fourth last">
                <div class="nuestros-servicios">
                    <img src="{{ asset('images/31.jpg') }}" alt="" width="52" height="52" />
                    <br>
                    <span class="servicio"> GARANTIA</span>
                    <p>Todos nuestros productos y servicios están garantizados</p>
                </div>
            </div>

            <div class="row box-title">
                <div class="span5">
                    <div class="border-line"></div>
                </div>

                <h3 class="span2">Sobre Nosotros</h3>

                <div class="span5">
                    <div class="border-line"></div>
                </div>
            </div>

            <div class="one-fourth ">
                <div class="sobre-nosotros">

                    <span class="nosotros"> ¿PORQUE ELEGIRNOS?</span>
                    <ul>
                        <li> <a href="#">Nuestra Empresa </a> </li>
                        <li><a href="#">Nuestra Trayectoria</a></li>
                        <li><a href="#">Nuestras Distinciones</a></li>
                        <li><a href="#">Nuestros Principios</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth ">
                <div class="sobre-nosotros">

                    <span class="nosotros"> POLITICAS</span>
                    <ul>
                        <li> <a href="#">Politica de Devoluciones </a> </li>
                        <li><a href="#">Politica de Privacidad</a></li>
                        <li><a href="#">Politicas Comerciales</a></li>
                        <li><a href="#">Politica de Darantias</a></li>
                        <li><a href="#">Politica de Envios</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth ">
                <div class="sobre-nosotros">

                    <span class="nosotros"> SERVICIOS</span>
                    <ul>
                        <li> <a href="#">Soporte </a> </li>
                        <li><a href="#">Ventas Tienda</a></li>
                        <li><a href="#">Ventas Online</a></li>
                        <li><a href="#">Reclamaciones</a></li>
                    </ul>
                </div>
            </div>
            <div class="one-fourth last">
                <div class="sobre-nosotros">

                    <span class="nosotros"> CONTACTANOS!</span>
                    <p> <i class="fas fa-map"></i>Con gusto nuestros ejecutivos especializados atenderán tus dudas, recibirán tus comentarios.</p>

                    <ul class="datos">
                        <li> <a href="">Jirón Francisco Pizarro 203, Trujillo</a></li>
                        <li> <a href="">936108792</a></li>
                        <li><a href="">ventas@geepperu.com</a></li>
                    </ul>


                </div>
            </div>



        </div>
    </div>
    <!-- END FOOTER -->

    <!-- START COPYRIGHT -->
    <div id="copyright">
        <div class="container">
            <div class="row">
                <div class="left span6">
                    <a><strong>2022© Todos los derechos reservados</strong></a>
                </div>
                <div class="right span6">
                    <p>hecho por TPF

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END COPYRIGHT -->

    </div>
    <!-- END WRAPPER -->

    </div>
    <!-- END BG SHADOW -->



    <!-- START CUSTOM SCRIPT -->

    <!-- END CUSTOM SCRIPT -->

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @yield('script')
</body>
<!-- END BODY -->

</html>