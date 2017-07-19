@extends('layout.app')
@section('scripts')
    <!-- Add jQuery library -->
    <script type="text/javascript" src="{{asset('lib/jquery-1.10.2.min.js')}}"></script>

    <!-- Add mousewheel plugin (this is optional) -->
    <script type="text/javascript" src="{{asset('lib/jquery.mousewheel.pack.js?v=3.1.3')}}"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="{{asset('source/jquery.fancybox.pack.js?v=2.1.5')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('source/jquery.fancybox.css?v=2.1.5')}}" media="screen" />

    <!-- Add Button helper (this is optional) -->
    <link rel="stylesheet" href="{{asset('source/helpers/jquery.fancybox-buttons.css')}}">
    <script type="text/javascript" src="{{asset('source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"> </script>

    <!-- Add Thumbnail helper (this is optional) -->
    <link rel="stylesheet" type="text/css" href="{{asset('source/helpers/jquery.fancybox-thumbs.css?v=1.0.7')}}" />
    <script type="text/javascript" src="{{asset('source/helpers/jquery.fancybox-thumbs.js?v=1.0.7')}}"></script>

    <!-- Add Media helper (this is optional) -->
    <script type="text/javascript" src="{{asset('source/helpers/jquery.fancybox-media.js?v=1.0.6')}}"></script>


    @endsection
@section('content')
    <div class="container">
        <div class="page-header" id="banner">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">CALIFORNIA SUMMER</h2>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="{{asset('img/CaliforniaSummer/001.jpg')}}">
                                <img class="img-responsive" src="{{asset('img/CaliforniaSummer/001.jpg')}}">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/002.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/002.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/003.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/003.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/004.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/004.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/005.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/005.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/006.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/006.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/007.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/007.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/008.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/008.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/009.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/009.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/010.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/010.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/011.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/011.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/012.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/012.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/013.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/013.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/014.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/014.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/015.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/015.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/016.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/016.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/017.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/017.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/018.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/018.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/019.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/019.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/020.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/020.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/021.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/021.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/022.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/022.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/023.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/023.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/024.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/024.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/025.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/025.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/026.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/026.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/027.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/027.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/028.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/028.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/029.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/029.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/030.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/030.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/031.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/031.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/032.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/032.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/033.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/033.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/034.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/034.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/035.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/035.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/036.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/036.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/037.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/037.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/038.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/038.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/039.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/039.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/040.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/040.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/041.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/041.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/042.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/042.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/043.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/043.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/044.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/044.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/045.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/045.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/046.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/046.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/047.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/047.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/048.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/048.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/049.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/049.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/050.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/050.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/051.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/051.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/052.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/052.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/053.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/053.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/054.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/054.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/055.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/055.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/056.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/056.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/057.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/057.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/058.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/058.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/059.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/059.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/060.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/060.jpg">
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/061.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/061.jpg">
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/062.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/062.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/063.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/063.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/064.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/064.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/065.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/065.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/066.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/066.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/067.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/067.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/068.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/068.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/069.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/069.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/070.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/070.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/071.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/071.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/072.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/072.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/073.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/073.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/074.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/074.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/075.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/075.jpg">
                            </a>

                        </div>
                    </div>
                </div>


                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/076.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/076.jpg">
                            </a>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/077.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/077.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/078.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/078.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/079.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/079.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/080.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/080.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/081.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/081.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/082.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/082.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/083.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/083.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/084.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/084.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/085.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/085.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/086.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/086.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/087.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/087.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/088.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/088.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/089.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/089.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/090.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/090.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/091.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/091.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/092.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/092.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/093.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/093.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/094.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/094.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/095.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/095.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/096.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/096.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/097.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/097.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/098.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/098.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/099.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/099.jpg">
                            </a>

                        </div>
                    </div>
                </div>


                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/100.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/100.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/101.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/101.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/102.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/102.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/103.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/103.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/104.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/104.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/105.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/105.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/106.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/106.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/107.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/107.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/108.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/108.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/109.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/109.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/110.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/110.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/111.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/111.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/112.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/112.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/113.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/113.jpg">
                            </a>

                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="thumbnail">
                        <div class="caption">
                            <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/CaliforniaSummer/114.jpg">
                                <img class="img-responsive" src="../../img/CaliforniaSummer/114.jpg">
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('scripts_footer')
    <script type="text/javascript" src="{{asset('source/jquery.fancybox.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {

            /*
             *  Button helper. Disable animations, hide close button, change title type and content
             */

            $('.fancybox-buttons').fancybox({
                openEffect  : 'none',
                closeEffect : 'none',

                prevEffect : 'none',
                nextEffect : 'none',

                closeBtn  : false,

                helpers : {
                    title : {
                        type : 'inside'
                    },
                    buttons : {}
                },

                afterLoad : function() {
                    this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
                }
            });



        });
    </script>
    @endsection