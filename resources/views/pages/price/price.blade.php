@extends('layout.layout')
@section('price')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    <!-- Pricing  -->
    @include('pages.price.components.pricing')
    <!-- Pricing End -->

    <!-- Price Alt  -->
    @include('pages.price.components.price-alt')
    <!-- Price Alt End -->

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer  -->
    @include('components.footer-top')

@endsection
