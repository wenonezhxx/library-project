<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 40px;
        }

        h1 {
            text-align: center;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #333;
            text-decoration: none;
        }

        .back:hover {
            text-decoration: underline;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 14px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background: #333;
            color: white;
        }

        tr:nth-child(even) {
            background: #f5f5f5;
        }
    </style>
</head>

<body>

<div class="container">

    <a class="back" href="/">← На главную</a>

    <h1>{{ $title }}</h1>

    <table>
        <thead>
            <tr>
                @if ($records->isNotEmpty())
                    @foreach ((array) $records->first() as $column => $value)
                        <th>{{ $columnNames[$column] ?? $column }}</th>
                    @endforeach
                @endif
            </tr>
        </thead>

        <tbody>
            @forelse ($records as $record)
                <tr>
                    @foreach ((array) $record as $value)
                        <td>{{ $value ?? '—' }}</td>
                    @endforeach
                </tr>
            @empty
                <tr>
                    <td>Записей пока нет</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</div>

</body>
</html>
