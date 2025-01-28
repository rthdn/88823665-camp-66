@extends('layouts.default')

@section('content')
    <div class="error-page text-center mt-5">
        <h2 class="headline">@yield('code')</h2>
        <div class="error-content mt-3">
            @yield('message')
        </div>
    </div>
@endsection
