@extends('layout.app')
@section('scripts')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        function initialize() {
            var marcadores = [
                ['Garrido Abad', 4.615043,-74.14143]
            ];
            var map = new google.maps.Map(document.getElementById('mapa'), {
                zoom: 15,
                center: new google.maps.LatLng(4.615043,-74.14143),
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
                <div class="col-md-4">
                    <h4>CONTACTO CORPORATIVO</h4>

                    {!! Form::open(['route'=>'send', 'method'=>'post', 'id'=>'contacto_frm']) !!}
                    <div class="form-group">
                        {{--{!! Form::label('name', 'Nombre') !!}--}}
                        {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre', 'required', 'autofocus']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::email('email', null, ['class'=>'form-control','placeholder'=>'Email', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('subject', null, ['class'=>'form-control','placeholder'=>'Asunto', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('tel', null, ['class'=>'form-control','placeholder'=>'Teléfono', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('ciudad', null, ['class'=>'form-control','placeholder'=>'Ciudad', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('pais', null, ['class'=>'form-control','placeholder'=>'País', 'required']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::text('mensaje', null, ['class'=>'form-control','placeholder'=>'Mensaje', 'required']) !!}
                    </div>

                    {{--<form id="contacto_frm">--}}
                        {{--<div class="form-group">--}}
                            {{--<input type="text"  id="nombre" name="name" class="form-control "  required="required" placeholder="Nombre" autofocus/>--}}
                        {{--</div>--}}
                        {{--<div class="form-group">
                            <input type="email" id="email" name="subject" class="form-control "  required="required" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="asunto" name="asunt" class="form-control "  required="required" placeholder="Asunto" />
                        </div>--}}
                        {{--<div class="form-group">
                            <input type="text" id="telefono" name="tel" class="form-control "  required="required" placeholder="Teléfono" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="ciudad" name="city" class="form-control "  required="required" placeholder="Ciudad" />
                        </div>
                        <div class="form-group">
                            <input type="text" id="pais" name="country" class="form-control "  required="required" placeholder="País" />
                        </div>
                        <div class="form-group">
                            <textarea id="mensaje" name="message" class="form-control "  required="required" placeholder="Motivo"></textarea>
                        </div>--}}

                        <div id="respuesta"></div>
                        <div class="form-group">
                            {!! Form::submit('Enviar', ['class'=>'btn btn-info btn-block btn-lg']) !!}
                        </div>
                        {{--<div class="form-group">
                            <button type="submit" class="btn btn-info btn-block btn-lg">Enviar</button>
                        </div>--}}
                    {!! Form::close() !!}
                    <p>GRUPO HECMODE, S.A</p>
                    <p>LUNES A VIERNES DE 8:00 - 17:00 HRS</p>
                    <p>3RA. CALLE 8-54 SAN CRISTÓBAL 1 SECTOR A2,</p>
                    <P> C.CC YAZ PLAZA LOCAL 21 ZONA 8 DE MIXCO, GUATEMALA</P>
                    <p>TEL. +502 2443-0373 / 5422-8216</p>
                    <p>CEL. +502 5859-2500</p>

                </div>
                <div class="col-md-8">
                    <div id="mapa" class="mapa"></div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('scripts_footer')

    @endsection