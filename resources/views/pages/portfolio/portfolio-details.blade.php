@extends('layout.layout')
@section('portfolio-details')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    <!-- Portfolio  -->
    @include('pages.portfolio.components.portfolio-single')
    <!-- Portfolio End -->

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer  -->
    @include('components.footer-top')

@endsection
