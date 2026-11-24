@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Список музеев</h2>

    @foreach ($museums as $museum)
        <p>
            <a href="{{ url('/museums/' . $museum->id) }}">
                {{ $museum->name }}
            </a>
        </p>
    @endforeach
</div>
@endsection
