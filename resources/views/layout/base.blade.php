<!DOCTYPE html>

<!-- START HEAD -->
<head>
    <meta charset="UTF-8" />

    <!-- this line will appear only if the website is visited with an iPad -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

    <title>GEEP PERU</title>

    <link href="{{ asset('css/reset.css') }}" rel="stylesheet" type="text/css" media="all"/>
	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all"/>

    <link href="{{ asset('style.css') }}" rel="stylesheet" type="text/css" media="all"/>
	<link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" media="all"/>

    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" type="text/css" media="all"/>

   
    <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
     
    <link rel='stylesheet' id='thickbox-css'  href="{{ asset('js/thickbox/thickbox.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='tipsy-css'  href="{{ asset('css/tipsy.css') }}" type='text/css' media='all' />

    <link rel='stylesheet' id='fonts-css'  href="{{ asset('css/font-awesome.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='full-descriptor-css'  href="{{ asset('portfolios/full-description/css/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='slide-details-css'  href="{{ asset('portfolios/slide-detail/css/style.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='shortcode-css'  href="{{ asset('css/shortcodes.css') }}" type='text/css' media='all' />

    <link rel='stylesheet' id='colorbox-css'  href="{{ asset('css/colorbox.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='custom-button-mfast-3-css'  href="{{ asset('css/buttons/mfast-3.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css'  href="{{ asset('sliders/flexslider/css/flexslider.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-elegant-css'  href="{{ asset('sliders/flexslider-elegant/css/slider.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='rs-css'  href="{{ asset('sliders/revolution-slider/css/slider.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='rs-settings-css'  href="{{ asset('sliders/revolution-slider/rs-plugin/css/settings.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='rs-captions-css'  href="{{ asset('sliders/revolution-slider/rs-plugin/css/captions.css') }}" type='text/css' media='all' />

    <!-- [favicon] begin -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <!-- [favicon] end -->

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />



    <script  src="{{ asset('js/jquery/jquery.js') }}" ></script>
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

             <!-- <script type="text/javascript">
                    jQuery(function($){
                        $('#last-tweets-3 .list-tweets-3').tweetable({
                            listClass: 'tweets-widget-3',
                            username: 'YIW',
                            time: false,
                            limit: 3,
                            replies: false
                        });
                    });
                </script> -->  

            </div>

            <div id="text-8" class=" widget-last span6 widget widget_text">
                <div class="textwidget">
                    <a href="# " class="socials-small facebook-small" title="Facebook"  >facebook</a>

                    <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                    <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                    <a href="#" class="socials-small google-small" title="Google"  >google</a>

                    <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                    <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a></div>
            </div>
        </div>
    </div>
</div>
<!-- 
<script>
    jQuery(function($){
        var twitterSlider = function(){
            $('#topbar .last-tweets ul').addClass('slides');
            $('#topbar .last-tweets').flexslider({
                animation: "fade",
                slideshowSpeed: 5 * 1000,
                animationDuration: 700,
                directionNav: false,
                controlNav: false,
                keyboardNav: false
            });
        };
        $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
            twitterSlider();
        });
    });
</script>-->

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
                            <img src="{{ asset('imgs/geepperu2.png') }}" title="geepperu" alt="geepperu"   width="160px"/>
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
                                        Inicio312
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
                                        <li class="nav-icon-target-small">
                                            <a href="home-iv.html">
                                                Home Version IV
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-design-small">
                                            <a href="home-v.html">
                                                Home Version V
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-cert-small">
                                            <a href="home-vi.html">
                                                Home Version VI (Grid slider)
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-book-small">
                                            <a href="home-vii.html">
                                                Home Version VII
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-cake-small">
                                            <a href="home-viii.html">
                                                Home Version VIII
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-bulb-small ">
                                            <a href="home-ix.html">
                                                Home version IX (Blog)
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
                                                Revolution Slider
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="images-grid.html">Images Grid
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sliders-thumbnails.html">Thumbnails
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="elastic.html">
                                                Elastic
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="slider-flexslider-classic.html">
                                                Flexslider Classic
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="flexslider-elegant.html">
                                                Flexslider Elegant
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="cycle.html">
                                                Cycle
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="slider-flash.html">
                                                Slider Flash
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
                                        <li class="nav-icon-contact-small ">
                                            <a href="pages-contact.html">
                                                Contact
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-bomb-small">
                                            <a href="error-404.html">
                                                Error 404
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
                                        <li>
                                            <a href="portfolio-filterable.html">
                                                Portfolio Filterable
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-2-columns.html">
                                                Portfolio 2 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-3-columns.html">
                                                Portfolio 3 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-4-columns.html">
                                                Portfolio 4 Columns
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-big-image.html">
                                                Portfolio Big Image
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-slider.html">
                                                Portfolio Slider
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="portfolio-detail.html">
                                                Portfolio Full Description
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
                                        <li>
                                            <a href="blog-elegant.html">
                                                Elegant
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="blog-blog-pinterest-style.html">
                                                Pinterest Style
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
                                        <li>
                                            <a href="sc-alert-box-buttons.html">
                                                Alert box &#038; Buttons
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-table-box-prices.html">
                                                Table &#038; Box prices
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-media-widgets.html">
                                                Media &#038; Widgets
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="sc-mix-various.html">
                                                Mix &#038; Various
                                                <div>
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
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
    
    @yield('container')
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
            <div class="nuestros-servicios"  >
                <img src="{{ asset('images/25.jpg') }}"   alt="" width="52" height="52" />
                <br>
                <span class="servicio"> ALTA CALIDAD</span>
                <p>Contamos con la mejor tecnología nacional e internacional</p>
               
            </div>
        </div>

        <div class="one-fourth ">
            <div class="nuestros-servicios" >
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
                <img src="{{ asset('images/41.jpg') }}" alt="" width="52" height="52" />
                <br>
                <span class="servicio"> GARANTIA</span>
                <p >Todos nuestros productos y servicios están garantizados</p>
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
                <p>Con gusto nuestros ejecutivos especializados atenderán tus dudas, recibirán tus comentarios.</p>
                <ul class="datos">
                    <li > <a href="">Jirón Francisco Pizarro 203, Trujillo</a></li>
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
                <a ><strong>2022© Todos los derechos reservados</strong></a>
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

<script  src="{{ asset('js/jquery.colorbox-min.js') }}" ></script>
<script  src="{{ asset('js/jquery.flexslider-min.js') }}" ></script>
<script  src="{{ asset('js/jquery.tweetable.js') }}" ></script>
<script  src="{{ asset('js/jquery.superfish.js') }}" ></script>

@yield('script')
</body>
<!-- END BODY -->
</html>