@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $museum->name }}</h2>
    <p>Страна: {{ $museum->country->name }}</p>
    <h3>Выставки:</h3>
    @foreach ($museum->exhibitions as $exhibition)
        <p>
            <a href="{{ url('/exhibitions/' . $exhibition->id) }}">
                {{ $exhibition->name }}
            </a>
        </p>
    @endforeach
</div>
@endsection
