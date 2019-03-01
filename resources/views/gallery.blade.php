@extends('layouts/layout')
@section('title','Kontakti')
@section('asideLeft')
    <p>Saziņa:</p>
@stop
@section('content')
    <h4>Galerija:</h4>
    <a href="{{ url('/') }}/Images/logo.jpg" data-lightbox="gallery1" data-title="Attēls 1">
        <img src="{{ url('/') }}/Images/logo.jpg" class="galerija"/>
    </a>
    <a href="{{ url('/') }}/Images/artwork.jpg" data-lightbox="gallery1" data-title="Attēls 2">
        <img src="{{ url('/') }}/Images/artwork.jpg" class="galerija"/>
    </a>
    <a href="{{ url('/') }}/Images?artwork2.jpg" data-lightbox="gallery1" data-title="Attēls 3">
        <img src="{{ url('/') }}/Images/artwork2.jpg" class="galerija">
    </a>

@stop