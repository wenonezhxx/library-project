@extends('layouts.app')

@section('content')

<div class="container">
    <h2>{{ $artist->name }}</h2>
    <p>Страна: {{ $artist->country->name }}</p>
    <p>Стиль: {{ $artist->style->name }}</p>
    <h3>Произведения:</h3>
    @foreach ($artist->artworks as $artwork)
        <p>
        <a href="{{ url('/artworks/' . $artwork->id) }}">
            {{ $artwork->name }}
        </a>
    </p>
@endforeach

    <h3>Техники:</h3>
    @foreach ($artist->techniques as $technique)
        <p>
        {{ $technique->name }}
    </p>
@endforeach
</div>

@endsection
