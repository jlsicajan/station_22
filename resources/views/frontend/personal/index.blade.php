@extends('frontend.principal.app')
@section('after_styles_end')
    <style>
        #us {
            color: #3B6B52 !important;
            background-color: #ffffff !important;
            border-right: solid #3B6B52;
            border-left: solid #3B6B52;
        }
    </style>
@endsection
@section('content')
    <div id="pricing" class="container-fluid">
        <div class="text-center">
            <h2>Conocenos</h2>
            <h4>Nuestro personal</h4>
        </div>
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading text-center">
                        <h3>Edvin Leonel Upun Tzirin</h3>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <img class="img-responsive" src="/images/no-pic.png" style="margin: 0 auto;">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-lg">Ver mas</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading text-center">
                        <h3>Fabian Sicajan Coy</h3>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <img class="img-responsive" src="/images/no-pic.png" style="margin: 0 auto;">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-lg">Ver mas</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="panel panel-default text-center">
                    <div class="panel-heading">
                        <h3>David Sule Marroquin</h3>
                    </div>
                    <div class="panel-body">
                        <div class="text-center">
                            <img class="img-responsive" src="/images/no-pic.png" style="margin: 0 auto;">
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-lg">Ver mas</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection