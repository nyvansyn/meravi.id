@extends('front.layouts.index')

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
