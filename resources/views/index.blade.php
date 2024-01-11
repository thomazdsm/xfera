@extends('layout.app')

@section('content')
    <section id="home">
        @include('components.home') {{-- Banner principal --}}
    </section>

    <section id="clients">
{{--        @include('components.clients') {{-- As feature in -}}--}}
    </section>

    <section id="products">
        @include('components.products') {{-- Finances --}}
    </section>
    <section id="about">
        @include('components.about') {{-- Numbers --}}
    </section>

    <section id="for-you">
        @include('components.for-you') {{-- Products --}}
    </section>

    <section id="how-to">
        @include('components.how-to') {{-- Step by Step --}}
    </section>

    <section id="testimonials">
        @include('components.testimonials') {{-- Testimonials --}}
    </section>

    <section id="contact">
        @include('components.contato') {{-- Contact Section --}}
    </section>

    <section id="community">
        @include('components.community') {{-- Community Section --}}
    </section>

    <section id="explore">
        @include('components.explore') {{-- Start using --}}
    </section>
@endsection
