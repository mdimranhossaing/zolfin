@extends('layout.layout')

@section('404')

  <!-- Banner  -->
  @include('components.banner')
  <!-- Banner End -->

  <!-- Error  -->
  @include('pages.404.components.error')
  <!-- Error End -->

  <!-- Back To Top -->
  @include('components.back-to-top')
  <!-- Back To Top End -->

  <!-- Footer Top  -->
  @include('components.footer-top')
  <!-- Footer Top End  -->

@endsection