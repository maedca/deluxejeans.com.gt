@extends('layout.app')
@section('content')
    <div class="container">
        <div class="page-header" id="banner">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="artic1 slider-wrapper theme-default">
                        <div id="slider" class="nivoSlider">
                            <img src="{{asset('img/Slider/1.jpg')}}">

                            <img src="{{asset('img/Slider/2.jpg')}}">

                            <img src="{{asset('img/Slider/3.jpg')}}" data-transition="slideInLeft"/>

                            <img src="{{asset('img/Slider/4.jpg')}}">

                        </div>
                    </div>

                    <article class="artic1 top">
                        <figure id="fig_1" class="mar_top">
                            <a href="{{URL('colecciones/back_to')}}"><img src="{{asset('img/index/1.jpg')}}" alt="nueva collección deluxe" {{--data-toggle="modal"
                                             data-target="#myModal"--}}></a>
                        </figure>


                        <!--<img class="absolute" src="img/index/xe.png">-->
                        <figure id="fig_2" class="mar_top relative">

                            <a href="{{URL('colecciones/back_to')}}"><img src="{{asset('img/index/2.jpg')}}" alt="selfie deluxe" {{--data-toggle="modal"
                                             data-target="#myModal"--}}></a>

                        </figure>

                    </article>

                    <article class="artic1">
                        <figure id="fig_3">
                            <a href="{{URL('colecciones/back_to')}}"><img src="{{asset('img/index/3.jpg')}}" alt="nuevo catalogo deluxe" {{--data-toggle="modal"
                                             data-target="#myModal"--}}></a>
                        </figure>
                        <figure id="fig_4">
                            <a href="{{URL('colecciones/back_to')}}"><img src="img/index/4.jpg" alt="giff card deluxe" data-toggle="modal"
                                             data-target="#myModal"></a>
                        </figure>
                    </article>
                </div>

            </div>
        </div>
    </div>

  {{--  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset('img/baner_registro.jpg') }}" class="img-responsive">
                    </div>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'public.registro', 'method' => 'POST', 'id' => 'RegForm']) !!}
                    <div id="primero">
                        --}}{{--<h2 class="text-center"> aqui va el formulario</h2>--}}{{--
                        <div class="form-group">
                            {!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombres y Apellidos', 'required', 'id' => 'name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Correo Electronico', 'required', 'id' => 'email']) !!}
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('tel', null, ['class'=>'form-control', 'placeholder'=>'Teléfono', 'required', 'id' => 'tel']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('city', null, ['class'=>'form-control', 'placeholder'=>'Ciudad', 'required', 'id' => 'city']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('ci', null, ['class'=>'form-control', 'placeholder'=>'Cédula', 'id' => 'cedula']) !!}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::text('n_fact', null, ['class'=>'form-control', 'placeholder'=>'Número de Factura', 'id' => 'n_fact']) !!}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    {!! Form::textarea('message', null,['class'=>'form-control', 'placeholder'=>'Deje su mensaje', 'id' => 'message']) !!}
                                </div>
                            </div>
                        </div>
                        <button id="prox1" type="button" class="btn btn-primary">
                            Siguiente
                        </button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    <div id="segundo" class="oculto">
                        <h2 class="text-center"> Condiciones</h2>
                        <div class="row">
                            <div class="col-md-6">
                                {!! Form::checkbox('acepto', 'acepto', ['required']) !!} <p>Acepto los terminos y condiciones</p>
                            </div>
                        </div>
                        {!! Form::submit('Registrar', ['class'=>'btn btn-info']) !!}
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>

                    </div>
                    <div id="tercero" class="oculto">
                        <h2 class="text-center"> aqui va el mensaje</h2>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>--}}
@endsection

{{--
@section('scripts_footer')
    <script type="text/javascript">
        $(document).ready(function () {
            $('article').find('a').click(function (event) {
                event.preventDefault();
            });

            $('#myModal').modal();
            $('#flash-overlay-modal').modal();
        });

        function siguiente(ocultar, mostrar) {
            $('#' + ocultar).hide(500);
            $('#' + mostrar).show(500);
        }

        $('#prox1').click(function() {
            if ($('#name').val() == '') {
                $('#name').focus();
            } else if ($('#email').val() == '') {
                $('#email').focus();
            } else if ($('#tel').val() == '') {
                $('#tel').focus();
            } else if ($('#city').val() == '') {
                $('#city').focus()
            } else if ($('#ci').val() == ''){
                $('#n_fact').focus();
            } else if ($('#message').val() == '') {
                $('#message').focus();
            } else {
                $('#primero').hide(500);
                $('#segundo').show(500);
            }
        });
    </script>
@endsection--}}
