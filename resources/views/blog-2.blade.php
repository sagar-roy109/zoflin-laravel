@extends('components.layout')
@section('main_content')
        <!-- Banner  -->
        @include('components.banner')
        <!-- Banner End -->

        <!-- Blog Post  -->
        @include('components.blogs_with_side_bar')
        <!-- Blog Post End -->

        <!-- Back To Top -->
        @include('components.backTop')
        <!-- Back To Top End -->

@endsection
