
        @extends('components.layout')

        @section('main_content');
        <!-- Hero  -->
        @include('components.hero')
        <!-- Hero End -->

        <!-- Project Showcase -->
        @include('components.projects')
        <!-- Project Showcase -->

        <!-- About  -->
        @include('components.about')
        <!-- About End -->

        <!-- Service  -->
        @include('components.service')
        <!-- Service End -->

        <!-- Project  -->
        @include('components.projects')
        <!-- Project End -->

        <!-- Pricing  -->
        @include('components.pricing')
        <!-- Pricing End -->

        <!-- Counter UP -->
        @include('components.counter')
        <!-- Counter UP End -->

        <!-- Testimonial  -->
        @include('components.testimonial');
        <!-- Testimonial End -->

        <!-- Process  -->
        @include('components.process')
        <!-- Process End -->

        <!-- News  -->
        @include('components.news')
        <!-- News End -->

        <!-- CTA  -->
        @include('components.cta')
        <!-- CTA End -->

        <!-- Back To Top -->
        @include('components.backTop')
        <!-- Back To Top End -->

        @endsection
