<?php
function service_btn($route, $title) {
    $html = "
    <div class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-0 col-xl-3 col-xl-offset-0\">
        <a href=\"$route\" class=\"services\"> $title </a>
    </div>
    ";
    echo $html;
}
?>


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1>eHOSP Services</h1>
                </div>

                <div class="panel-body">
                    <div class="row row-eq-height">
                        @foreach ($userTypeServices as $service => $details)
                            @if (in_array(Auth::user()->user_type, $details['userTypes']))
                                {{ service_btn($details['route'], $service) }}
                            @endif
                        @endforeach
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-0 col-xl-3 col-xl-offset-0">
                            <a href="services/emergency" class="services" style="background-color: #ec5840"> Emergency </a>
                        </div>
                        <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-0 col-xl-3 col-xl-offset-0">
                            <a href="services/first-aid" class="services" style="background-color: #ec5840"> First Aid </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
