@extends('layouts.master')

@push('css')
    @vite(['resources/sass/client/pages/homepage/home.scss'])
@endpush

@section('content')
    @include('pages.homepage.includes.top-banner')
    @include('pages.homepage.includes.list-pet')
@endsection
