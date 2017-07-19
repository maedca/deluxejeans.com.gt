<footer class="footer">
    <div class="container container-footer">
        <div class="row">
            <div class="col-md-4 con-footer">


                <p class="line_inf">Acerca de D'ELUXE</p>
                <div class="footer-list">
                    <ul>
                        <li><a href="{{URL('nuestras_marcas')}}">Nuestra Marca</a></li>
                        <li><a href="{{URL('franquicia')}}">Franquicia</a></li>
                        <li><a href="{{URL('trabaja_con_nosotros')}}">Trabaja con Nosotros</a></li>
                        <li><a href="{{URL('politicas_garantia_calidad')}}">Políticas de garantía y calidad</a></li>
                    </ul>
                </div>

            </div>

            <div class="col-md-4 con-footer">
                <p class="line_inf">Franquicias</p>
                <div class="footer-list">
                    <ul>
                        <li><a href="http://www.deluxejeans.com.gt">Guatemala</a></li>
                        <li><a href="http://www.deluxejeans.com.sv">El Salvador</a></li>
                        <li><a href="http://www.deluxejeans.cr">Costa Rica</a></li>
                        <li><a href="http://www.deluxejeans.com.hn">Honduras</a></li>
                        <li><a href="http://www.deluxejeans.cl">Chile</a></li>
                    </ul>
                </div>

            </div>

            <div class="col-md-4 con-footer justify-footer">

                <p>
                    <strong>© D'ELUXE JEANS </strong>
                </p>
                <p>
                    FASHION TOUCH Martinez / Hernandez S.A.S.
                </p>
                <p>
                    Todos Los Derechos Reservados.
                </p>
                <p class="pmd">
                    <span class="desa"> Desarrollado por</span><a class="class_a_pmd" href="http://www.promediosdigitales.com/" target="_blank"> <img src="{{asset('img/logo_pmd.png')}}" class="logo_pmd" alt="pmd"></a>
                </p>

            </div>
        </div>
    </div>
</footer>
<div id="ir-arriba"><span class="icon-arrow-up"></span></div>
<div id="ideomas">
    <ul>
        <li><a href="en" id="en" class="small">Ingles <img class="bandera" src="{{asset('img/Banderas/usa-01.png')}}"></a></li>
        <br>
        <li><a href="./" id="es" class="small">Español <img class="bandera" src="{{asset('img/Banderas/espana.svg')}}"></a></li>
    </ul>
</div>

<script src="{{asset('js/jquery-1.10.2.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
</script>
@yield('scripts_footer')
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>