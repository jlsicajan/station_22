@extends('frontend.principal.app')
@section('after_styles_end')
    <style>
        #videos {
            color: #3B6B52 !important;
            background-color: #ffffff !important;
            border-right: solid #3B6B52;
            border-left: solid #3B6B52;
        }
    </style>
@endsection
@section('content')
    <div id="videos_page" class="container-fluid text-center bg-grey">
        <h2>Aprende de profesionales</h2><br>
        <h4>Conoce de primeros auxilios</h4>
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/hTMrlHHVx8A"></iframe>
                    </div>
                    <p><strong>Descripcion del curso</strong></p>
                    <button class="btn btn-lg">Conocer mas</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/mYFaghHyMKc"></iframe>
                    </div>
                    <p><strong>Descripcion</strong></p>
                    <button class="btn btn-lg">Conocer mas</button>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item"  src="https://www.youtube.com/embed/GC63HGcsfEg"></iframe>
                    </div>
                    <p><strong>Descripcion</strong></p>
                    <button class="btn btn-lg">Conocer mas</button>
                </div>
            </div>
        </div>
        <br>

        <h2>-***********************</h2>
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
                    <h4>"This company is the best. I am so happy with the result!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span>
                    </h4>
                </div>
                <div class="item">
                    <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
                </div>
                <div class="item">
                    <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span>
                    </h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
@endsection