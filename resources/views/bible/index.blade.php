<!DOCTYPE html>
<html>
<head>
    <title>Bible Books</title>
        <style>
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
            background-color:#E6E6FA;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
        }
        h1 {
            font-size: 30px;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        a{
            text-decoration: none;
            font-size: 20px;

        }
    </style>
<body>
    <h1>King James Version Bible</h1>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="query" placeholder="Search for a word...">
        <button type="submit">Search</button>
    </form>

    <ul class="container">
        @foreach ($books as $book)
            <li class="card">
                <a href="{{ url('/books', $book->book_name) }}">
                    {{ $book->book_name }}
                </a>
            </li>
        @endforeach
    </ul>
</body>
</html>

