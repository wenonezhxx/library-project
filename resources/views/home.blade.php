<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Галерея товарищей Вадима — База данных</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f1f3f5;
            margin: 0;
            padding: 40px 20px;
            color: #222;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        header {
            text-align: center;
            margin-bottom: 45px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .subtitle {
            color: #777;
            font-size: 15px;
        }

        .section {
            margin-bottom: 40px;
        }

        .section-title {
            font-size: 21px;
            margin-bottom: 18px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ddd;
        }

        .tables {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .card {
            display: block;
            background: white;
            padding: 22px;
            border-radius: 12px;
            text-decoration: none;
            color: #222;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
            transition: 0.2s;
            border: 1px solid #e5e5e5;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 7px 18px rgba(0, 0, 0, 0.1);
        }

        .card h2 {
            font-size: 19px;
            margin: 0 0 12px;
        }

        .card-primary {
            padding: 30px;
            border-left: 5px solid #333;
        }

        .card-primary h2 {
            font-size: 23px;
        }

        .count {
            color: #777;
            font-size: 14px;
        }

        .card-secondary {
            padding: 18px 22px;
        }

        .card-secondary h2 {
            font-size: 17px;
        }

        .card-connection {
            background: #f8f8f8;
            border-style: dashed;
        }

        @media (max-width: 650px) {
            body {
                padding: 25px 15px;
            }

            h1 {
                font-size: 25px;
            }

            .tables {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <header>
        <h1>Галерея товарищей Вадима</h1>
        <div class="subtitle">специально для Егора Николаевича</div>
    </header>


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

</body>
</html>
