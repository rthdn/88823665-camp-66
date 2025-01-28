@extends('errors::minimal')

@section('title', __('Page Not Found'))
@section('code')
    <h1 class="headline text-warning">404</h1>
@endsection

@section('message')
    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>
    <p>We could not find the page you were looking for. Meanwhile, you may <a href="{{ url('/') }}">return to dashboard</a>.</p>
@endsection
