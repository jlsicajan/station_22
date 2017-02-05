@extends('frontend.principal.app')
@section('after_styles_end')
    <style>
        #videos {
            color: #3B6B52 !important;
            background-color: #ffffff !important;
            border-right: solid #3B6B52;
            border-left: solid #3B6B52;
        }

        .btn {
            margin: 15px 0;
            background-color: #3B6B52;
            color: #fff;
        }

        .btn:hover {
            border: 1px solid #3B6B52;
            background-color: #fff !important;
            color: #3B6B52;
        }
    </style>
    <link href="//vjs.zencdn.net/5.4.6/video-js.min.css" rel="stylesheet">
@endsection
@section('content')
    <div id="videos_page" class="container-fluid text-center bg-grey">
        <h2>Aprende de profesionales</h2><br>
        <h4>Conoce de primeros auxilios</h4>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/skills_2.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/logo.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/index_1.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/skills_2.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/logo.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/index_1.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/skills_2.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/logo.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
            <div class="col-sm-4">
                <div class="embed-responsive embed-responsive-16by9">
                    <video class="embed-responsive-item video-js vjs-default-skin vjs-big-play-centered"
                           controls data-setup='{ "techOrder": ["youtube"] }' preload="auto"
                           poster="/images/index_1.jpg">
                        <source src="https://www.youtube.com/embed/hTMrlHHVx8A" type='video/youtube'>
                    </video>
                </div>
                <p><strong>Descripcion</strong></p>
                <button class="btn btn-lg">Conocer mas</button>
            </div>
        </div>
        <br>

        <h2>************************</h2>
        <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>"Texto de ejemplo Texto de ejemplo!"<br><span style="font-style:normal;">Edvin Leonel Upun Tzirin</span>
                    </h4>
                </div>
                <div class="item">
                    <h4>"Texto de ejemplo Texto de ejemplo!"<br><span style="font-style:normal;">Fabian Sicajan Coy</span></h4>
                </div>
                <div class="item">
                    <h4>"Texto de ejemplo Texto de ejemplo Texto de ejemplo"<br><span style="font-style:normal;">Jose Luis Sicajan Coy</span>
                    </h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </div>
@endsection
@section('after_scripts_end')
    <script src="//vjs.zencdn.net/5.4.6/video.min.js"></script>
    <script src="https://cdn.rawgit.com/eXon/videojs-youtube/v2.0.3/dist/Youtube.js"></script>
@endsection