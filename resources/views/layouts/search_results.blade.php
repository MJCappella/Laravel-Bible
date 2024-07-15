<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
    <style>
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
    <a href="{{ url('/') }}">Back to Home</a>

    <h1>Search Results for "{{ $query }}"</h1>

    @if($results->isEmpty())
        <p>No results found.</p>
    @else
        <ul>
            @foreach($results as $result)
                <li>
                    <strong>{{ $result->book_name }} {{ $result->chapter }}:{{ $result->verse }}</strong>
                    <p>{{ $result->text }}</p>
                </li>
            @endforeach
        </ul>
    @endif
<footer>All Rights reseved 2024</footer>
</body>
</html>
