@extends('layout.layout')
@section('faq')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    <!-- FAQ  -->
    @include('pages.faq.components.faq')
    <!-- FAQ End -->

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer  -->
    @include('components.footer-top')

@endsection
