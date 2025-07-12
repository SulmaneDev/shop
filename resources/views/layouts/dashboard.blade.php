@extends('layouts.app')
@section('body')

    <body>
        <div id="global-loader">
            <div class="whirly-loader"> </div>
        </div>
        <div class="main-wrapper">
            @include('components/dashboard-header')
            @include('components.dashboard-sidebar')
            <div class="page-wrapper">
                <div class="content">
                    @yield('main')
                </div>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/tesseract.js@5.1.0/dist/tesseract.min.js"></script>

        @php $modalName = trim($__env->yieldContent('name')); @endphp

        @if (!empty($modalName))
            @include('modals.dashboard-' . $modalName)
        @endif

    </body>
@endsection
