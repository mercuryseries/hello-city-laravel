@extends('app')

@section('title', 'About Us | ' . config('app.name'))

@section('content')
    <img src="/images/tdn-logo.png" alt="TDN Logo">

    <p>Built with &hearts; by LES TEACHERS DU NET.</p>

    <p><a href="{{ route('home') }}">Revenir à la page d'accueil</a></p>
@endsection
