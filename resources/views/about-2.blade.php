
        @extends('components.layout')

        @section('main_content')

        <!-- Banner  -->
        @include('components.banner')
        <!-- Banner End -->

        <!-- Info Section  -->
        @include('components.info')
        <!-- Info Section End -->

        <!-- Counter UP -->
        @include('components.counter')
        <!-- Counter UP End -->

        <!-- Team Member  -->
        @include('components.teams')
        <!-- Team Member End -->

        <!-- Work Process  -->
        @include('components.process')
        <!-- Work Process End -->

        <!-- Award  -->
        @include('components.awards')
        <!-- Award End -->

        <!-- Video Section  -->
        @include('components.video')
        <!-- Video Section End -->

        <!-- Back To Top -->
        @include('components.backTop')
        <!-- Back To Top End -->

       @endsection
