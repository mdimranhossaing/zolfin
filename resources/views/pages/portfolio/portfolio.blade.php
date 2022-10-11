@extends('layout.layout')
@section('portfolio')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    <!-- Portfolio  -->
    @include('pages.portfolio.components.portfolio-contents')
    <!-- Portfolio End -->

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer  -->
    @include('components.footer-top')

@endsection
