@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Список произведений</h2>

    @foreach ($artworks as $artwork)
        <p>
            <a href="{{ url('/artworks/' . $artwork->id) }}">
                {{ $artwork->name }}
            </a>
        </p>
    @endforeach
</div>
@endsection
