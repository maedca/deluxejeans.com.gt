@extends('layout.app')
@section('content')
    <div class="container">
        <div class="page-header" id="banner">

            <div class="row">

                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2>Envia tu hoja de Vida</h2>
                    <div id="respuesta"></div>
                    <form id="enviar_frm" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text"  name="Nombre" id="Nombre"class="form-control "  required="required" placeholder="Nombre" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email"  name="Email" id="Email"class="form-control "  required="required" placeholder="E-mail" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea  name="Mensaje" id="Mensaje"class="form-control "  required="required" placeholder="Mensaje" ></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="file" required="required"  name="adjunto" id="archivo-adjunto" class="form-control " placeholder="Adjuntar archivo" />
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info btn-block btn-lg">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-2"></div>
            </div>

        </div>
    </div>
    @endsection