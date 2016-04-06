<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Joelini</title>

        <!-- Favicon Icon -->
        <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/images//android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
            
        <!-- Bootstrap -->
        <link href="/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/[version]/jquery.mobile-[version].min.css" />

        <!-- fonts -->
        <link href="/css/fonts.css" rel="stylesheet">

        <!-- slides -->
        <link href="/css/jquery.bxslider.css" rel="stylesheet">

        <!-- style -->
        <link href="/css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section class="header" id="topo">
            <div class="container">
                <nav id="menu-nav" class="nav nav-header nav-menu">
                    <div class="logo-topo pull-left">
                        <div class="logo-container ">
                            <a href="/" title="Home">
                                <img src="/images/logo.png" alt="Home" />
                            </a>
                        </div>
                    </div>
                    <div class="nav-topo pull-right">
                        <ul class="secondary-menu pull-right">
                            <li>
                                <a href="#" title="Webmail" class="link link-webmail">
                                    <span>Webmail</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Inglês" class="link link-ingles">
                                    <span>Inglês</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="Espanhol" class="link link-espanhol">
                                    <span>Espanhol</span>
                                </a>
                            </li>
                        </ul>
                        <div class="primary-menu-show"></div>
                        <ul class="primary-menu">
                            <li>
                                <a href="#empresa" title="Empresa" class="bt-scroll">Empresa</a>
                            </li>
                            <li>
                                <a href="#produtos" title="Produtos" class="bt-scroll">Produtos</a>
                            </li>
                            <li>
                                <a href="#vendas" title="Vendas" class="bt-scroll">Vendas</a>
                            </li>
                            <li>
                                <a href="#contato" title="Contato" class="bt-scroll">Contato</a>
                            </li>
                            <li>
                                <a href="#" title="Acesso Restrito">Acesso Restrito</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        <section class="header-hide position-fixed">
            <div class="container">
                <nav id="menu-nav" class="nav nav-header nav-menu">
                    <div class="logo-topo pull-left">
                        <div class="logo-container ">
                            <a href="/" title="Home">
                                <img src="/images/logo.png" alt="Home" />
                            </a>
                        </div>
                    </div>
                    <div class="nav-topo pull-right">
                        <div class="primary-menu-show"></div>
                        <ul class="primary-menu">
                            <li>
                                <a href="#empresa" title="Empresa" class="bt-scroll">Empresa</a>
                            </li>
                            <li>
                                <a href="#produtos" title="Produtos" class="bt-scroll">Produtos</a>
                            </li>
                            <li>
                                <a href="#vendas" title="Vendas" class="bt-scroll">Vendas</a>
                            </li>
                            <li>
                                <a href="#contato" title="Contato" class="bt-scroll">Contato</a>
                            </li>
                            <li>
                                <a href="#" title="Acesso Restrito">Acesso Restrito</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </section>

        @yield('container')

        <section class="footer-home" id="footer">
            <div class="container">
                <div class="footer-infos address">
                    <p>Joelini - Componentes para Móveis</p>
                    <span>Rua Arapaçu-Listrado, 260 - Parque Industrial</span>
                    <span>CEP: 86703-295</span>
                    <span>Arapongas - PR - Brasil</span>
                </div>

                <div class="footer-infos phone">
                    <span><i class="my-icon my-icon-phone"> </i> (43) 3172-4359</span>
                </div>

                <div class="footer-infos email">
                    <span><i class="my-icon my-icon-email"> </i> joelini@joelini.com.br</span>
                </div>

                <div class="footer-infos logo-phorma">
                    <a href="http://www.phormadesign.com.br/" target="_blank">
                        <span>Phorma Design</span>
                    </a>
                </div>
            </div>
        </section>

        <div class="overview"></div>
        <div class="overContentLightBox"></div>

        <div class="cont-top-button">
            <a href="#topo" rel="topo" class="bt-scroll top-button">
                <span class="icon-top glyphicon glyphicon-chevron-up"></span>
            </a>
        </div>
            
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

        <!-- ScrolloTop -->
        <script src="/js/jquery.scrollTopAll.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="/js/bootstrap.min.js"></script>

        <!-- Slides -->
        <script src="/js/jquery.bxslider.js"></script>

        <!-- GOOGLE MAPS -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfVpzxaQRLeD6z-r-RaEzNbRfD-c6aWmo&sensor=TRUE"></script>
        <script type="text/javascript">
            function initializeMaps() {
                var myLatlng = new google.maps.LatLng(-23.391801,-51.430427);
                var latlngAlpha = new google.maps.LatLng(-23.391801,-51.430427);
                var mapOptions = {
                  zoom: 17,
                  center: myLatlng,
                  mapTypeId: google.maps.MapTypeId.ROADMAP,
                }
                var map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
                var marker = new google.maps.Marker({
                    position: latlngAlpha,
                    title:"Joelini"
                });
                var styles = [{
                    stylers: [
                        { hue: ""},
                    ]
                }];
                var styledMap = new google.maps.StyledMapType(styles,
                {name: "Styled Map"});
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');
                marker.setMap(map);
            }
        </script>

        <!-- Scripts -->
        <script src="/js/scripts.js"></script>
    </body>
</html>