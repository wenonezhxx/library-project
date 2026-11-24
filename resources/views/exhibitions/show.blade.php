@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $exhibition->name }}</h2>
    <p>Музей: {{ $exhibition->museum->name }}</p>
    <h3>Произведения:</h3>
    @foreach ($exhibition->artworks as $artwork)
        <p>
            <a href="{{ url('/artworks/' . $artwork->id) }}">
                {{ $artwork->name }}
            </a>
        </p>
    @endforeach
</div>
@endsection
