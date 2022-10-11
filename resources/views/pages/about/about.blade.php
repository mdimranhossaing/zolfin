@extends('layout.layout')

@section('about')

  <!-- Banner  -->
  @include('components.banner')
  <!-- Banner End -->

  <!-- Info Section  -->
  @include('pages.about.components.info-section')
  <!-- Info Section End -->

  <!-- Team Member  -->
  @include('pages.about.components.team-member')
  <!-- Team Member End -->

  <!-- Counter UP -->
  @include('components.counter-up')
  <!-- Counter UP End -->

  <!-- Award  -->
  @include('pages.about.components.award')
  <!-- Award End -->

  <!-- Back To Top -->
  @include('components.back-to-top')
  <!-- Back To Top End -->

  <!-- Footer  -->
  @include('components.footer-top')

@endsection
