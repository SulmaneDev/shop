@extends('layouts.app')
@section('title', 'Page Not Found')

@section('body')
    <body class="error-page">
        <div id="global-loader">
            <div class="whirly-loader"> </div>
        </div>
        <div class="main-wrapper">
            <div class="error-box">
                <div class="error-img">
                    <img src="/assets/img/authentication/error-404.png" class="img-fluid" alt="Img">
                </div>
                <h3 class="h2 mb-3">Oops, something went wrong</h3>
                <p>Error 404 Page not found. Sorry the page you looking for
                    doesn’t exist or has been moved</p>
                <a href="{{route('dashboard.index')}}" class="btn btn-primary">Back to Dashboard</a>
            </div>
        </div>
    </body>
@endsection
