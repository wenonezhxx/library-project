@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $artwork->name }}</h2>
    <p>Художник: {{ $artwork->artist->name }}</p>
    <p>Жанр: {{ $artwork->genre->name }}</p>
    <p>Материал: {{ $artwork->material->name }}</p>
    <h3>Выставки:</h3>

@foreach ($artwork->exhibitions as $exhibition)
    <p>
        <a href="{{ url('/exhibitions/' . $exhibition->id) }}">
            {{ $exhibition->name }}
        </a>
    </p>
@endforeach
</div>
@endsection
