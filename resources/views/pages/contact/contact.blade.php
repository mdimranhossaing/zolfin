@extends('layout.layout')
@section('contact')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    <!-- Contact  -->
    @include('pages.contact.components.contact')
    <!-- Contact End -->

    <!-- Contact Card -->
    @include('pages.contact.components.contact-card')
    <!-- Contact Card End -->

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer Top  -->
    @include('components.footer-top')
    <!-- Footer Top End  -->

@endsection
