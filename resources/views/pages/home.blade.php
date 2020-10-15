@extends('app')

@section('content')
    <img src="{{ asset('images/quebec-flag.png') }}" alt="Quebec Flag">

    <h1>Hello from Quebec!</h1>

    <p>It's currently {{ date('h:i A') }}.</p>
@endsection
