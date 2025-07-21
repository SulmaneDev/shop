@extends('layouts.app')

@section('body')

    <body class="pos-page">
        <div id="global-loader">
            <div class="whirly-loader"> </div>
        </div>
        <div class="main-wrapper pos-five">
            @include('components.pos-header')
            @include('components.pos-sidebar')
            <div class="page-wrapper pos-pg-wrapper ms-0">
                <div class="content pos-design p-0">
                    @include('components.pos-content')
                    @include('components.pos-footer-area')
                </div>
            </div>
        </div>
        @include('components.pos-modal-includer')
    </body>
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tabs li');
            const tabContents = document.querySelectorAll('.tab_content');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabContents.forEach(content => content.classList.remove('active'));
                    this.classList.add('active');
                    const target = this.getAttribute('data-target');
                    const activeContent = document.querySelector(
                        `.tab_content[data-tab="${target}"]`);
                    if (activeContent) activeContent.classList.add('active');
                });
            });
        });
    </script>
@endsection
