<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a id="start" href="{{ url('/') }}">INICIO</a></li>
                <li><a id="videos" href="{{ url('videos') }}">VIDEOS</a></li>
                <li><a id="us" href="{{ url('personal') }}">NOSOTROS</a></li>
            </ul>
        </div>
    </div>
</nav>