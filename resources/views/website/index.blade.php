@extends('layouts.master')

@section('content')
    @include('website.home.slider')
    @include('website.home.feature')
    @include('website.home.aboutone')
    @include('website.home.jobcategorie')
    @include('website.home.vision')

    @include('website.home.message')  {{--  Testimonial --}}
    {{-- @include('website.home.job') --}}
    @include('website.home.counterup')
   @include('website.home.partners')  {{--  clients --}}
@endsection
