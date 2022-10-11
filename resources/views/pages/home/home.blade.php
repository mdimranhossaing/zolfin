@extends('layout.layout')

@section('home')

  <!-- Hero  -->
  @include('pages.home.components.hero')
  <!-- Hero End -->

  <!-- Project Showcase -->
  @include('pages.home.components.project-showcase')
  <!-- Project Showcase -->

  <!-- About  -->
  @include('pages.home.components.about')
  <!-- About End -->

  <!-- Service  -->
  @include('pages.home.components.service')
  <!-- Service End -->

  <!-- Project  -->
  @include('pages.home.components.project')
  <!-- Project End -->

  <!-- Pricing  -->
  @include('pages.home.components.pricing')
  <!-- Pricing End -->

  <!-- Counter UP -->
  @include('components.counter-up')
  <!-- Counter UP End -->

  <!-- Testimonial  -->
  @include('pages.home.components.testimonial')
  <!-- Testimonial End -->

  <!-- Process  -->
  @include('pages.home.components.process')
  <!-- Process End -->

  <!-- News  -->
  @include('pages.home.components.news')
  <!-- News End -->

  <!-- CTA  -->
  @include('pages.home.components.cta')
  <!-- CTA End -->

  <!-- Back To Top -->
  @include('components.back-to-top')
  <!-- Back To Top End -->

  <!-- Footer Top  -->
  @include('pages.home.components.footer-top')
  <!-- Footer Top End  -->

@endsection
