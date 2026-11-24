@extends('layouts.app')
@section('content')
<div class="container">

    <div class="subtitle">специально для Егора Николаевича</div>


    <!-- Основные таблицы -->
    <section class="section">

        <h2 class="section-title">Основные таблицы</h2>

        <div class="tables">

            @foreach ($data as $table)
                @if (in_array($table['name'], [
                    'artists',
                    'artworks',
                    'museums',
                    'exhibitions'
                ]))

                    <a class="card card-primary"
                       href="/table/{{ $table['name'] }}">

                        <h2>{{ $table['title'] }}</h2>

                        <div class="count">
                            Количество записей: {{ $table['count'] }}
                        </div>

                    </a>

                @endif
            @endforeach

        </div>

    </section>


    <!-- Справочники -->
    <section class="section">

        <h2 class="section-title">Справочники</h2>

        <div class="tables">

            @foreach ($data as $table)
                @if (in_array($table['name'], [
                    'countries',
                    'styles',
                    'techniques',
                    'genres',
                    'materials'
                ]))

                    <a class="card card-secondary"
                       href="/table/{{ $table['name'] }}">

                        <h2>{{ $table['title'] }}</h2>

                        <div class="count">
                            Количество записей: {{ $table['count'] }}
                        </div>

                    </a>

                @endif
            @endforeach

        </div>

    </section>


    <!-- Таблицы связей -->
    <section class="section">

        <h2 class="section-title">Таблицы связей</h2>

        <div class="tables">

            @foreach ($data as $table)
                @if (in_array($table['name'], [
                    'artists_has_techniques',
                    'exhibitions_has_artworks'
                ]))

                    <a class="card card-secondary card-connection"
                       href="/table/{{ $table['name'] }}">

                        <h2>{{ $table['title'] }}</h2>

                        <div class="count">
                            Количество записей: {{ $table['count'] }}
                        </div>

                    </a>

                @endif
            @endforeach

        </div>

    </section>

</div>
@endsection
