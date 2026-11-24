@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Список выставок</h2>

    @foreach ($exhibitions as $exhibition)
        <p>
            <a href="{{ url('/exhibitions/' . $exhibition->id) }}">
                {{ $exhibition->name }}
            </a>
        </p>
    @endforeach
</div>
@endsection
