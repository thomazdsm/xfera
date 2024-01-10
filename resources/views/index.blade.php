@extends('layout.app')

@section('content')
    @include('components.home') {{-- Banner principal --}}
    @include('components.clients') {{-- As feature in --}}
    @include('components.products') {{-- Finances --}}

    @include('components.section1') {{-- Numbers --}}
    @include('components.section2') {{-- Products --}}
    @include('components.section3') {{-- Step by Step --}}

    @include('components.testimonials') {{-- Testimonials --}}
    @include('components.contato') {{-- Blank Section --}}

    @include('components.section4') {{-- Start using --}}
@endsection
