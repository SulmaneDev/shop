@extends('layouts.app')
@section('body')
    <body class="account-page">
        <div id="global-loader" >
			<div class="whirly-loader"> </div>
		</div>
        <main class="main-wrapper">
            @yield('content')
        </main>
    </body>
@endsection
