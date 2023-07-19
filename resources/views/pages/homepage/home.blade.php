@extends('layouts.master')

@push('css')
    @vite(['resources/sass/client/pages/homepage/home.scss'])
@endpush

@section('content')
    @include('pages.homepage.includes.top-banner')
    @include('pages.homepage.includes.list-pet')
    @include('pages.homepage.includes.middle-banner')
    @include('pages.homepage.includes.out-products')
    @include('pages.homepage.includes.pet-sellers')
    @include('pages.homepage.includes.bottom-banner')
    @include('pages.homepage.includes.pet-knowledge')
@endsection
