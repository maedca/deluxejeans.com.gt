@extends('layout.app')
@section('content')
    <div class="container">
        <br>
        <div class="page-header" id="banner">

            <h4><b>FORMATO DE PEDIDOS</b></h4>

                {!! Form::open([ 'route'=>'send_pedido','method' => 'post']) !!}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Nombre y Apellido', 'required', 'autofocus', 'id'=>'nombre']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('address',null,['class'=>'form-control', 'required', 'placeholder'=>'Direccion', 'id'=>'direccion']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('department', null, ['class'=>'form-control', 'id'=>'departamento', 'required', 'placeholder'=>'Departamento']) !!}
                        </div>
                        <div class="form-group">

                            {!! Form::text('tel',null,['class'=>'form-control', 'id'=>'telefono', 'placeholder'=>'Teléfono Fijo', 'required']) !!}
                        </div>
                        <div class="form-group">

                            {!! Form::email('subject', null, ['class'=>'form-control', 'id'=>'email', 'required', 'placeholder'=>'E-mail']) !!}
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form-group">
                            {!! Form::date('fecha', null, ['class'=>'form-control', 'id'=>'fecha', 'required', 'placeholder'=>'Día/Mes/Año']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('location', null, ['class'=>'form-control', 'required', 'id'=>'localidad', 'placeholder'=>'Localidad']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('city', null, ['class'=>'form-control', 'placeholder'=>'Ciudad', 'id'=>'ciudad', 'required']) !!}

                        </div>
                        <div class="form-group">
                            {!! Form::text('celtel', null, ['class'=>'form-control', 'id'=>'telcel', 'required','placeholder'=>'Teléfono Celular']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::text('conveyor', null, ['class'=>'form-control', 'id'=>'transportadora', 'required','placeholder'=>'Sugerencia Transportadora']) !!}

                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 campo-diligencia">
                        <h3>Diligencia los Siguientes Campos</h3>
                    </div>
                    <div class="col-md-3 campos-table">
                        Coleccion
                    </div>
                    <div class="col-md-3 campos-table">
                        Referencia
                    </div>
                    <div class="col-md-2 campos-table">
                        Color
                    </div>
                    <div class="col-md-2 campos-table">
                        Talla
                    </div>
                    <div class="col-md-2 campos-table">
                        Cantidad
                    </div>
                </div>
                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('col1', null, ['class'=>'form-control', 'id'=>'coleccion1', 'placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia1', null, ['class'=>'form-control', 'id'=>'referencia1', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color1', null, ['class'=>'form-control', 'id'=>'color1', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla1', null, ['class'=>'form-control', 'id'=>'talla1', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad1', null, ['class'=>'form-control', 'id'=>'cantidad1', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion2', null, ['class'=>'form-control', 'id'=>'coleccion2', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia2', null, ['class'=>'form-control', 'id'=>'referencia2', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color2', null, ['class'=>'form-control', 'id'=>'color2', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla2', null, ['class'=>'form-control', 'id'=>'talla2', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad2', null, ['class'=>'form-control', 'id'=>'cantidad2', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion3', null, ['class'=>'form-control', 'id'=>'coleccion3', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia3', null, ['class'=>'form-control', 'id'=>'referencia3', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color3', null, ['class'=>'form-control', 'id'=>'color3', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla3', null, ['class'=>'form-control', 'id'=>'talla3', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad3', null, ['class'=>'form-control', 'id'=>'cantidad3', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion4', null, ['class'=>'form-control', 'id'=>'coleccion4', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia4', null, ['class'=>'form-control', 'id'=>'referencia4', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color4', null, ['class'=>'form-control', 'id'=>'color4', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla4', null, ['class'=>'form-control', 'id'=>'talla4', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad4', null, ['class'=>'form-control', 'id'=>'cantidad4', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion5', null, ['class'=>'form-control', 'id'=>'coleccion5', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia5', null, ['class'=>'form-control', 'id'=>'referencia5', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color5', null, ['class'=>'form-control', 'id'=>'color5', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla5', null, ['class'=>'form-control', 'id'=>'talla5', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad5', null, ['class'=>'form-control', 'id'=>'cantidad5', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion6', null, ['class'=>'form-control', 'id'=>'coleccion6', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia6', null, ['class'=>'form-control', 'id'=>'referencia6', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color6', null, ['class'=>'form-control', 'id'=>'color6', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla6', null, ['class'=>'form-control', 'id'=>'talla6', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad6', null, ['class'=>'form-control', 'id'=>'cantidad6', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion7', null, ['class'=>'form-control', 'id'=>'coleccion7', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia7', null, ['class'=>'form-control', 'id'=>'referencia7', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color7', null, ['class'=>'form-control', 'id'=>'color7', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla7', null, ['class'=>'form-control', 'id'=>'talla7', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad7', null, ['class'=>'form-control', 'id'=>'cantidad7', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion8', null, ['class'=>'form-control', 'id'=>'coleccion8', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia8', null, ['class'=>'form-control', 'id'=>'referencia8', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color8', null, ['class'=>'form-control', 'id'=>'color8', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla8', null, ['class'=>'form-control', 'id'=>'talla8', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad8', null, ['class'=>'form-control', 'id'=>'cantidad8', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion9', null, ['class'=>'form-control', 'id'=>'coleccion9', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia9', null, ['class'=>'form-control', 'id'=>'referencia9', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color9', null, ['class'=>'form-control', 'id'=>'color9', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla9', null, ['class'=>'form-control', 'id'=>'talla9', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad9', null, ['class'=>'form-control', 'id'=>'cantidad9', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion10', null, ['class'=>'form-control', 'id'=>'coleccion10', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia10', null, ['class'=>'form-control', 'id'=>'referencia10', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color10', null, ['class'=>'form-control', 'id'=>'color10', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla10', null, ['class'=>'form-control', 'id'=>'talla10', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad10', null, ['class'=>'form-control', 'id'=>'cantidad10', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion11', null, ['class'=>'form-control', 'id'=>'coleccion11', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia11', null, ['class'=>'form-control', 'id'=>'referencia11', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color11', null, ['class'=>'form-control', 'id'=>'color11', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla11', null, ['class'=>'form-control', 'id'=>'talla11', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad11', null, ['class'=>'form-control', 'id'=>'cantidad11', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>

                <div class="row campos-gris">

                    <div class="col-md-3">
                        {!! Form::text('coleccion12', null, ['class'=>'form-control', 'id'=>'coleccion12', '','placeholder'=>'Coleccion']) !!}

                    </div>
                    <div class="col-md-3">
                        {!! Form::text('referencia12', null, ['class'=>'form-control', 'id'=>'referencia12', '','placeholder'=>'Referencia']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('color12', null, ['class'=>'form-control', 'id'=>'color12', '','placeholder'=>'Color']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('talla12', null, ['class'=>'form-control', 'id'=>'talla12', '','placeholder'=>'Talla']) !!}

                    </div>
                    <div class="col-md-2">
                        {!! Form::text('cantidad12', null, ['class'=>'form-control', 'id'=>'cantidad12', '','placeholder'=>'Cantidad']) !!}

                    </div>
                </div>
                <br>




                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            {!! Form::textarea('message', null, ['class'=>'form-control', 'id'=>'mensaje','placeholder'=>'Observaciones', 'rows'=>'4']) !!}

                        </div>
                    </div>
                </div>

                <div id="respuesta"></div>

                <div class="form-group">
                    {!! Form::submit('Enviar',['class'=>'btn btn-info']) !!}

                </div>
            </form>




            <div class="row">
                <div class="col-md-6">
                    <h4><b>POLITICAS DE ENVIO DE  PEDIDOS…</b></h4>
                    <p>•  Tu primer pedido mínimo debe de ser de doce (12) unidades en todas las tallas (6-8-10 -12-14) para obtener precio de Mayorista y para próximos pedidos tu compra mínima debe ser de seis (6) unidades.</br>
                        •   Nuestros valores al por Mayor son los siguientes:  jeans desde $48.000 a $52.000  Blusas desde $35.000 hasta $45.000, Chaquetas desde $52.000 hasta $68.000 *Aplican condiciones y restricciones y estos precios varían según cada nueva colección.</br>
                        •   Al momento de tener listo tu pedido se enviara el valor a consignar y el numero de cuenta  para proceder a despachar el mismo.</br>
                        •   El pago total de tu pedido es de contado y debe ser realizado a nuestra cuenta corriente de Bancolombia y confirmado por nosotros antes de realizar el envió de tu pedido.</br>
                        •   El costo del envió y la devolución por cambio  será por cuenta del cliente.
                    </p>
                </div>
                <div class="col-md-6">
                    <h4><b>NOTA IMPORTANTE:</b></h4>
                    <p>1.   Nuestra empresa realiza despachos únicamente los días, martes y viernes.</br>
                        2.  Los cambios los puedes hacer por talla, color y diseño siempre de la colección vigente.</br>
                        3.  Las garantías te cubren defectos de tela, botones y cremalleras y se realizan durante la vigencia de cada colección.</br>
                        4.  Programa tus pedidos con antelación para que puedas cumplir con las entregas sobre todo en temporadas de mayor venta.</br>
                        5.  Nuestro precio de venta para mayoristas es de: $48.000, $49.000 y $52.000 mil pesos.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h2>DEJATE ENAMORAR UNA VEZ MAS DE LA DULZURA Y EL ENCANTO DE SER UMA MUJER DELUXE JEANS!!!</h2>
                </div>
            </div>

        </div>
    </div>
    @endsection
