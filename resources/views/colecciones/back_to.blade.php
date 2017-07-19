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
                    <h2 class="page-header">BACK TO THE FUTURE</h2>
                </div>
                @for ($i = 1; $i <= 9; $i++)
                    <div class="col-md-3 text-center">
                        <div class="thumbnail">
                            <div class="caption">
                                <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/madres/00{{$i}}.jpg">
                                    <img class="img-responsive" src="../../img/madres/00{{$i}}.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
                @for ($i = 10; $i <= 95; $i++)
                    <div class="col-md-3 text-center">
                        <div class="thumbnail">
                            <div class="caption">
                                <a class="fancybox-buttons" data-fancybox-group="button" href="../../img/madres/0{{$i}}.jpg">
                                    <img class="img-responsive" src="../../img/madres/0{{$i}}.jpg">
                                </a>
                            </div>
                        </div>
                    </div>

                @endfor














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