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
        <script src="js/jquery.scrollTopAll.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Slides -->
        <script src="js/jquery.bxslider.js"></script>

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
        <script src="js/scripts.js"></script>