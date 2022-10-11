@extends('layout.layout')
@section('service-details')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    @include('pages.service.components.service')

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer  -->
    @include('components.footer-top')

@endsection
