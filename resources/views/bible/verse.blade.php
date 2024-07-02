<!DOCTYPE html>
<html>
<head>
    <title>{{ $book }} Chapter {{ $chapter }} Verse {{ $verse }}</title>
    <style>
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            text-decoration: none;
            color: inherit;
            display:flex;
            flex-direction: row;
            background-color: #E6E6FA;
        }
    </style>
</head>
<body>
    <h1>{{ $book }} Chapter {{ $chapter }} Verse {{ $verse }}</h1>
    <ul>
        @foreach ($verses as $verse)
            <li class="card">{{ $verse->text}}</li>
        @endforeach
    </ul>
</body>
</html>
