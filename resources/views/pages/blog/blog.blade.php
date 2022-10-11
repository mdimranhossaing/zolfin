@extends('layout.layout')
@section('blog')

    <!-- Banner  -->
    @include('components.banner')
    <!-- Banner End -->

    <!-- Blog Post  -->
    @include('pages.blog.components.blog-posts')
    <!-- Blog Post End -->

    <!-- Back To Top -->
    @include('components.back-to-top')
    <!-- Back To Top End -->

    <!-- Footer  -->
    @include('components.footer-top')

@endsection
