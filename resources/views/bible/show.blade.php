<!DOCTYPE html>
<html>

<head>
    <title>{{ $book }}</title>
    <style>
        h1 {
            font-size: 30px;
            font-family: Arial, sans-serif;
            text-align: center;

        }

        .card {
            display: inline-block;
            width: 200px;
            height: 100px;
            margin: 10px;
            padding: 10px;
            border: 1px solid black;
            text-align: center;
            line-height: 100px;
            text-decoration: none;
            color: black;
            background-color: white;
            border-radius: 5px;
            box-shadow: 5px 5px 5px 5px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease-in-out;
            cursor: pointer;
            background-color: #E6E6FA;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            text-decoration: none;
        }

        a {
            text-decoration: none;
            font-size: 20px;
        }

        footer {
            position: fixed;
            font-size: 14px;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 50px;
            font-size: 20px;
            background-color: #f1f1f1;
            color: #4d4d4d;
            text-align: center;
            line-height: 50px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h1>{{ $book }}</h1>
    <ul class="container">
        @foreach ($chapters as $chapter)
            <li class="card"><a href="{{ url("/books/{$book}/chapters/{$chapter->chapter}") }}">Chapter
                    {{ $chapter->chapter }}</a></li>
        @endforeach
    </ul>
    <footer>All rights reserved 2024</footer>
</body>

</html>
