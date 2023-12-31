@extends('admin.layouts.app')

@section('content')
    @component('admin.components.page.header', [
        'pageTitle' => 'List User'
    ])
        @include('admin.users.include.index-header')
    @endcomponent

    @component('admin.components.page.body')
        @include('admin.users.include.index-table')
    @endcomponent
@endsection
