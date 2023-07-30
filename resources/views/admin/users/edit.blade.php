@extends('admin.layouts.app')

@section('content')
    @component('admin.components.page.header', [
        'pageTitle' => 'Edit User'
    ])
    @endcomponent

    @component('admin.components.page.body')
        @include('admin.users.include.create-form')
    @endcomponent
@endsection
