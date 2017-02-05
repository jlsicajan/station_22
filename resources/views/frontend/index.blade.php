@extends('frontend.principal.app')

@section('after_styles_end')
    <style>
        #start {
            color: #3B6B52 !important;
            background-color: #ffffff !important;
            border-right: solid #3B6B52;
            border-left: solid #3B6B52;
        }
    </style>
@endsection
@section('content')
    <div class="jumbotron text-center">
        <h1>Estacion 22</h1>
        <h4 style="color: white;">Salvando vidas y protegiendo propiedades</h4>
    </div>

    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <img class="img-responsive" src="/images/index.jpeg" style="margin: 0 auto;">
                </div>
            </div>
            <div class="col-md-6">
                <h2>BIENVENIDO!</h2><br>
                <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</h4><br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <br>
                <button class="btn btn-default btn-lg">Videos</button>
                <button class="btn btn-default btn-lg">Conocenos</button>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey">
        <div class="row text-center">
            <div class="col-sm-4"><br><br><br><br>
                <span class="glyphicon glyphicon-fire logo slideanim"></span>
            </div>
            <div class="col-sm-8">
                <h2>Nuestros valores</h2><br>
                <h4><strong>MISION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
                <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat.</p>
            </div>
        </div>
    </div>

    <!-- Container (Services Section) -->
    <div id="services" class="container-fluid text-center">
        <h2>NUESTROS SERVICIOS</h2>
        <h4>Lo que ofrecemos</h4>
        <br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-off logo-small"></span>
                <h4>POWER</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-heart logo-small"></span>
                <h4>LOVE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-lock logo-small"></span>
                <h4>JOB DONE</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
        <br><br>
        <div class="row slideanim">
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-leaf logo-small"></span>
                <h4>GREEN</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-certificate logo-small"></span>
                <h4>CERTIFIED</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
            <div class="col-sm-4">
                <span class="glyphicon glyphicon-wrench logo-small"></span>
                <h4 style="color:#303030;">HARD WORK</h4>
                <p>Lorem ipsum dolor sit amet..</p>
            </div>
        </div>
    </div>

    <!-- Container (Portfolio Section) -->
    <div id="portfolio" class="container-fluid text-center bg-grey">
        <h2>NUESTROS LOGROS</h2><br>
        <h4>Lo que hemos creado</h4>
        <div class="row text-center slideanim">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/images/fire_two.jpg" alt="Paris" width="100" height="100">
                    <p><strong>Descripcion</strong></p>
                    <p>Descripcion</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/images/index.jpeg" alt="New York" width="400" height="300">
                    <p><strong>Descripcion</strong></p>
                    <p>Descripcion</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="/images/build_fire.jpg" alt="San Francisco" width="400" height="300">
                    <p><strong>Descripcion</strong></p>
                    <p>Descripcion</p>
                </div>
            </div>
        </div>
        <br>

        <h2>TEXTO DE EJEMPLO</h2>
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
                    <h4>"Texto de ejemplo"<br><span style="font-style:normal;">Edvin Leonel Upun Tzirin</span>
                    </h4>
                </div>
                <div class="item">
                    <h4>"Texto de ejemplo Texto de ejemplo Texto de ejemplo"<br><span style="font-style:normal;">Fabian Sicajan Coy</span></h4>
                </div>
                <div class="item">
                    <h4>"Texto de ejemplo Texto de ejemplo Texto de ejemplo Texto de ejemplo"<br><span style="font-style:normal;">Jose Luis Sicajan Coy</span>
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

    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
        <h2 class="text-center">CONTACTANOS</h2>
        <div class="row">
            <div class="col-sm-5">
                <p>Contactanos y te responderemos lo mas pronto posible.</p>
                <p><span class="glyphicon glyphicon-map-marker"></span>Patzun Chimaltenango</p>
                <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
                <p><span class="glyphicon glyphicon-envelope"></span> myemail@email.com</p>
            </div>
            <div class="col-sm-7 slideanim">
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
                    </div>
                    <div class="col-sm-6 form-group">
                        <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
                    </div>
                </div>
                <textarea class="form-control" id="comments" name="comments" placeholder="Comentario"
                          rows="5"></textarea><br>
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <button class="btn btn-default pull-right" type="submit">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="googleMap" style="height:400px;width:100%;"></div>
    <!-- Add Google Maps -->
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript" src="{{ asset('js/sicajan/google.js') }}"></script>
@endsection