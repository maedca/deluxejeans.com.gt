@extends('layout.app')
@section('styles')
    <style type="text/css">
        a .img-tiendas{
            width: 100%;
        }
    </style>
    @endsection
@section('scripts')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        function initialize() {
            var marcadores = [
                ['RESTREPO', 4.586437, -74.101552],
                ['OULET', 4.6291953,-74.1206097],
                ['ZIPAQUIRA', 5.022261, -74.002240]
            ];
            var map = new google.maps.Map(document.getElementById('mapa'), {
                zoom: 9,
                center: new google.maps.LatLng(5.022261, -74.002240),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
            var infowindow = new google.maps.InfoWindow();
            var marker, i;
            for (i = 0; i < marcadores.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
                    map: map
                });
                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent(marcadores[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-66445392-1', 'auto');
        ga('send', 'pageview');

    </script>
    @endsection
@section('content')
    <div class="container">
        <div class="page-header" id="banner">

            <div class="row">
                <div class="col-md-12">
                    <div id="mapa"></div>
                </div>

                <div class="col-md-12">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/YI5jDtUNaY4" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <figure class="figure" id="fig_1">
                        <a href="./"><img class="img-tiendas" src="../img/tienda/deluxe_restrepo.jpg" alt="deluxe restrepo"></a>
                        <figcaption class="description">
                            <h2>D'ELUXE RESTREPO</h2>
                            <p>Dirección: Calle 17 Sur No. 19-26 Restrepo</p>
                            <p>Télefono: 57 (7) 1 30 03 543</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6">
                    <figure class="figure" id="fig_3">
                        <a href="./"><img class="img-tiendas" src="../img/tienda/deluxe_zipaquira.jpg" alt="deluxe zipaquira"></a>
                        <figcaption class="description">
                            <h2>D'ELUXE ZIPAQUIRA</h2>
                            <p>Dirección: Carrera 10 No. 4-40 L. 7</p>
                            <p>Télefono: 57 (7) 88 16 820</p>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6">
                    <figure class="figure" id="fig_3">
                        <a href="./"><img class="img-tiendas" src="../img/tienda/deluxe_zipaquira.jpg" alt="deluxe zipaquira"></a>
                        <figcaption class="description">
                            <h2>D'ELUXE OULET</h2>
                            <p>Dirección: Avenida Américas con carrera 65 Centro</p>
                            <p>Comercial Outlet Factory local 1-60 primer piso</p>
                            <p>Télefono: 57 (7) 46 74 650</p>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    @endsection
