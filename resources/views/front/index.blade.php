@extends('front.layouts.index')
@push('seo')
    <meta name="title" content="meravi.id">
    <meta name="description"
        content="Meravi.id merupakan layanan terintgrasi training center, event organizer dan kemitraan untuk community managementt & empowerment">
    <meta name="keywords" content=" meravi.id, training center, syncore ">
    <meta name="author" content="admin meravi.id">
@endpush

@section('containt')
    {{-- @include('front.layouts.components.slider')
    @include('front.layouts.components.tentang')
    @include('front.layouts.components.program')
    @include('front.layouts.components.mitra')
    @include('front.layouts.components.artikel') --}}
    @include('front.homepage.hero')
    @include('front.homepage.about')
    @include('front.homepage.portfolio')
    @include('front.homepage.client')
    @include('front.homepage.article')
    @include('front.homepage.contact')
@endsection
