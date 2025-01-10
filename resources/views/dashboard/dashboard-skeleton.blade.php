@extends('skeleton')
@section('styleBody', 'font-sans !font-normal')
@section('content')
    @include('partials.sidebar')
    @yield('main-content')
@endsection
