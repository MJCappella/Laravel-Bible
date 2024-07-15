<!DOCTYPE html>
<html>
<head>
    <title>{{ $book }} Chapter {{ $chapter }}</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 15px;
            line-height: 1.5;
            margin: 0;
            padding: 10px;
            background-color: #fff;
            color: #000;
            border: 1px solid #ccc;
            border-radius: 10px;
            width: 80%;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
            padding: 20px;

        }
        h1 {
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 30px;
        }
        .card{
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
    <h1>{{ $book }} Chapter {{ $chapter }}</h1>
    <ol>
        @foreach ($verses as $verse)
            <li class="card">{{ $verse->text}}</li>
        @endforeach
    </ol>
    <footer>All rights reserved 2024</footer>
</body>
</html>
