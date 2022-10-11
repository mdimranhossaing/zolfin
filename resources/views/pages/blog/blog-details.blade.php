@extends('layout.layout')
@section('blog-details')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    <!-- Blog Single Post  -->
    @include('pages.blog.components.blog-single-post')
    <!-- Blog Single Post End -->

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer  -->
    @include('components.footer-top')

@endsection
