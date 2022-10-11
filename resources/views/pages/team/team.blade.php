@extends('layout.layout')
@section('team')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    @include('pages.about.components.info-section')

    <!-- Team Member  -->
    @include('pages.about.components.team-member')
    <!-- Team Member End -->

    <!-- Award  -->
    @include('pages.about.components.award')
    <!-- Award End -->

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer  -->
    @include('components.footer-top')

@endsection
