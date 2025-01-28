@extends('errors::minimal')

@section('title', __('Server Error'))
@section('code')
    <h1 class="headline text-danger">500</h1>
@endsection

@section('message')
    <h3><i class="fas fa-server text-danger"></i> Oops! Something went wrong.</h3>
    <p>We will work on fixing that right away. Meanwhile, you may <a href="{{ url('/') }}">return to dashboard</a>.</p>
@endsection
