@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Список художников</h2>
    @foreach ($artists as $artist)
    <p>
    <a href="{{ url('/artists/' . $artist->id) }}">
        {{ $artist->name }}
    </a>
</p>
@endforeach
</div>
@endsection