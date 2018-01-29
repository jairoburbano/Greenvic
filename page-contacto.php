<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		greenvic
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		0.1.0
 */
$page = 'contacto';
$subpage = '';
include 'header.php'; ?>
<div class="banner banner--contacto">
    <div class="banner__media fit--media">
        <img src="assets/Cerezas-de-Virginia.jpg" alt="Titulo">
    </div><!-- /.banner__media -->
    <div class="banner__content">
        <div class="wrap">
            <div class="contact--column content">
                <h1 class="page--title light--title">Contacto</h1><!-- /.page--title light--title -->
                <p>
                    Envíanos tus consultas, sugerencias u opiniones a través de este formulario, sólo debes completar a continuación los campos solicitados y trataremos de resolver lo antes posible tus inquietudes.
                </p>
            </div><!-- /.contact--column -->
            <div class="contact--column">
                <form action="" class="formulario form--contact">
                    <div class="input-group group">
                        <label for="username">Nombre*:</label>
                        <input type="text" id="username" name="username">
                    </div><!-- /.input-group group -->
                    <div class="input-group group">
                        <label for="usermail">Email*:</label>
                        <input type="email" id="usermail" name="usermail">
                    </div><!-- /.input-group group -->
                    <div class="input-group group">
                        <label for="userphone">Teléfono*:</label>
                        <input type="tel" id="userphone" name="userphone">
                    </div><!-- /.input-group group -->
                    <div class="input-group group">
                        <label for="usertext">Mensaje*:</label>
                        <textarea name="usertext" id="usertext"></textarea>
                    </div><!-- /.input-group group -->
                    <div class="send-group">
                        <input type="submit" class="btn btn--border btn--send" value="Enviar">
                    </div><!-- /.send-group -->
                    <div class="message content">
                        <h4>H4: Título feedback OK</h4>
                        <p>
                            P: Nulla ullamcorper erat in nunc pretium imperdiet. Nullam semper tellus id felis molestie dignissim. Integer sit amet laoreet diam, sed auctor neque. Donec placerat pulvinar ligula et vestibulum. Aliquam fringilla eros ut neque posuere, ac dictum odio consectetur.
                        </p>
                    </div><!-- /.message -->
                </form><!-- /.formulario form--contact -->
            </div><!-- /.contact__column -->
        </div><!-- /.wrap -->
    </div><!-- /.banner__content -->
    <div class="icon--section">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="19.7px" height="32px" viewBox="0 0 19.7 32" enable-background="new 0 0 19.7 32" xml:space="preserve">
            <g>
                <path fill="#FFFFFA" d="M9.8,1.2c4.8,0,8.6,3.9,8.6,8.6v12.3c0,4.8-3.9,8.6-8.6,8.6c-4.8,0-8.6-3.9-8.6-8.6V9.8 C1.2,5.1,5.1,1.2,9.8,1.2 M9.8,0L9.8,0C4.4,0,0,4.4,0,9.8v12.3C0,27.6,4.4,32,9.8,32h0c5.4,0,9.8-4.4,9.8-9.8V9.8 C19.7,4.4,15.3,0,9.8,0L9.8,0z"/>
                <path fill="#FFFFFA" d="M7.1,19.4c0.9,0,2.3,1.2,2.7,2.1h0.1c0.5-0.9,1.8-2.1,2.7-2.1c0.3,0,0.6,0.1,0.6,0.1v0.1 c-1.7,1.2-2.8,3.7-3,4.4c0,0-0.1,0-0.2,0c-1.1,0-1.1-2.9-3.5-4.4v-0.1C6.5,19.5,6.8,19.4,7.1,19.4z"/>
                <path fill="#FFFFFA" d="M7.1,12.6c0.9,0,2.3-1.2,2.7-2.1h0.1c0.5,0.9,1.8,2.1,2.7,2.1c0.3,0,0.6-0.1,0.6-0.1v-0.1 c-1.7-1.2-2.8-3.7-3-4.4c0,0-0.1,0-0.2,0c-1.1,0-1.1,2.9-3.5,4.4v0.1C6.5,12.5,6.8,12.6,7.1,12.6z"/>
                <path fill="#FFFFFA" d="M0.9,16.9c0.4-1.1,2.3-1.8,4.9-1.8c3.6,0,5.7,0.7,8.7,0.7c1.4,0,2.5-0.2,4.1-0.7l0.2,0 c-0.4,1.1-2.3,1.8-4.9,1.8c-3.6,0-5.8-0.7-8.7-0.7c-1.4,0-2.5,0.2-4.1,0.7L0.9,16.9z"/>
            </g>
        </svg>
    </div><!-- /.icon--section -->
</div><!-- /.banner -->
<div class="container container--contact">
    <div class="mapa">
        <div class="accordeon__container">
            <div class="contact__accordeon">
                <div class="accordeon__item" id="casa-matriz">
                    <div class="accordeon__title" data-lat="-33.412679" data-lng="-70.579803">
                        Casa Matriz
                        <svg><use xlink:href="#shape-icon-accordeon" /></svg>
                    </div><!-- /.accordeon__title -->
                    <div class="accordeon__content content">
                        <strong>Dirección</strong>
                        <p>
                            Apoquindo 4775, oficina 1601, Las Condes.
                        </p>
                        <a class="gmaps" href="https://goo.gl/maps/zZF92xrVVmt" target="_blank" title="Apoquindo 4775, oficina 1601, Las Condes.">
                            Ver mapa
                        </a>
                        <strong>Teléfono</strong>
                        <p>
                            +56 2 2707 4200
                        </p>
                        <p class="btn btn--border btn--form">Contactar</p>
                    </div><!-- /.accordeon__content -->
                    <div class="formulario--accordeon">
                        <form action="" class="formulario form--contact">
                            <div class="input-group group hidden">
                                <input type="hidden" name="sector" value="Casa Matriz">
                            </div><!-- /.input-group group -->
                            <div class="input-group group">
                                <label for="username">Nombre*:</label>
                                <input type="text" id="username" name="username">
                            </div><!-- /.input-group group -->
                            <div class="input-group group">
                                <label for="usermail">Email*:</label>
                                <input type="email" id="usermail" name="usermail">
                            </div><!-- /.input-group group -->
                            <div class="input-group group">
                                <label for="userphone">Teléfono*:</label>
                                <input type="tel" id="userphone" name="userphone">
                            </div><!-- /.input-group group -->
                            <div class="input-group group">
                                <label for="usertext">Mensaje*:</label>
                                <textarea name="usertext" id="usertext"></textarea>
                            </div><!-- /.input-group group -->
                            <div class="send-group">
                                <p class="btn btn--border form-cancel">Cancelar</p><!-- /.btn btn--border btn--form -->
                                <input type="submit" class="btn btn--border btn--send" value="Enviar">
                            </div><!-- /.send-group -->
                        </form><!-- /.formulario form--contact -->
                    </div><!-- /.formulario--accordeon -->
                </div><!-- /.accordeon__item -->
                <div class="accordeon__item" id="placilla-organica">
                    <div class="accordeon__title" data-lat="-33.442989" data-lng="-70.754747">
                        Placilla Orgánica
                        <svg><use xlink:href="#shape-icon-accordeon" /></svg>
                    </div><!-- /.accordeon__title -->
                    <div class="accordeon__content content">
                        <strong>Dirección</strong>
                        <p>
                            Apoquindo 4775, oficina 1601, Las Condes.
                        </p>
                        <a class="gmaps" href="https://goo.gl/maps/zZF92xrVVmt" target="_blank" title="Apoquindo 4775, oficina 1601, Las Condes.">
                            Ver mapa
                        </a>
                        <strong>Teléfono</strong>
                        <p>
                            +56 2 2707 4200
                        </p>
                        <p class="btn btn--border btn--form">Contactar</p>
                    </div><!-- /.accordeon__content -->
                    <div class="formulario--accordeon">
                        <form action="" class="formulario form--contact">
                            <div class="input-group group hidden">
                                <input type="hidden" name="sector" value="Placilla orgánica">
                            </div><!-- /.input-group group -->
                            <div class="input-group group">
                                <label for="username">Nombre*:</label>
                                <input type="text" id="username" name="username">
                            </div><!-- /.input-group group -->
                            <div class="input-group group">
                                <label for="usermail">Email*:</label>
                                <input type="email" id="usermail" name="usermail">
                            </div><!-- /.input-group group -->
                            <div class="input-group group">
                                <label for="userphone">Teléfono*:</label>
                                <input type="tel" id="userphone" name="userphone">
                            </div><!-- /.input-group group -->
                            <div class="input-group group">
                                <label for="usertext">Mensaje*:</label>
                                <textarea name="usertext" id="usertext"></textarea>
                            </div><!-- /.input-group group -->
                            <div class="send-group">
                                <p class="btn btn--border form-cancel">Cancelar</p><!-- /.btn btn--border btn--form -->
                                <input type="submit" class="btn btn--border btn--send" value="Enviar">
                            </div><!-- /.send-group -->
                        </form><!-- /.formulario form--contact -->
                    </div><!-- /.formulario--accordeon -->
                </div><!-- /.accordeon__item -->
            </div><!-- /.contact__accordeon -->
            <div id="map"></div><!-- /#map -->
        </div><!-- /.accordeon__container -->
    </div><!-- /.mapa -->
</div><!-- /.container -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCTuazTT4ftRrTOscHQYPabgJPLiBS9YXc&sensor=false"></script>
<script>
    function initialize() {
        $('.accordeon__title').click(function(e){
            setPin(e, $(this).data('lat'), $(this).data('lng'));
        });
        
        var mapCenter = new google.maps.LatLng(-33.412679, -70.579803);
        var zoomLevel = 16;
        var mapOptions = {
            center: mapCenter,
            zoom: zoomLevel,
            maxZoom:zoomLevel,
            minZoom:zoomLevel,
            disableDefaultUI: true,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            keyboardShortcuts: false,
            zoomControl: false,
            streetViewControl: true,
            styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        marker = new google.maps.Marker({
            position: mapCenter,
            map: map,
            animation: google.maps.Animation.DROP,
            icon: 'http://localhost/greenvic/maquetacion/img/marker.png',
            clickable: false
        });
        function setPin(e, lat, lng){
            e.preventDefault();
            markerPosition = new google.maps.LatLng(lat, lng);
            marker.setMap(null);
            map.panTo(markerPosition);
            marker = new google.maps.Marker({
                position: markerPosition,
                map: map,
                animation: google.maps.Animation.DROP,
                icon: 'http://localhost/greenvic/maquetacion/img/marker.png',
                clickable: false
            });
            return false;
        }
        google.maps.event.addListener(map, 'dragend', function(){
            $c = map.getCenter();
            $ll = new google.maps.LatLng($c.d, $c.e);
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php include 'footer.php'; ?>