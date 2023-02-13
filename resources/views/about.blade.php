@extends('components.layout')

@section('main_content')
        <!-- Banner  -->
        @include('components.banner')
        <!-- Banner End -->

        <!-- Info Section  -->
        @include('components.info')
        <!-- Info Section End -->

        <!-- Team Member  -->
        @include('components.teams')
        <!-- Team Member End -->

        <!-- Counter UP -->
        @include('components.counter')
        <!-- Counter UP End -->

        <!-- Award  -->
        @include('components.awards')
        <!-- Award End -->

        <!-- Back To Top -->
        @include('components.backTop')
        <!-- Back To Top End -->

       @endsection
