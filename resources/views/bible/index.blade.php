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

        .search-form {
            display: flex;
            align-items: center;
            background-color: #f1f1f1;
            border: 1px solid #ccc;
            border-radius: 25px;
            padding: 5px 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .search-input {
            border: none;
            border-radius: 20px;
            padding: 10px;
            font-size: 16px;
            width: 200px;
            outline: none;
        }

        .search-input:focus {
            border: 1px solid #007BFF;
            background-color: #fff;
        }

        .search-button {
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        footer{
            text-align: center;
            padding: 10px;
            background-color: #f1f1f1;
            font-size: 14px;
            color: #4d4d4d;
            border-top: 1px solid #ddd;
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 20px;
        }

    </style>
<body>
    <h1>King James Version Bible</h1>
     <form action="{{ route('search') }}" method="GET" class="search-form">
        <input type="text" name="query" placeholder="Search for a word..." class="search-input">
        <button type="submit" class="search-button">Search</button>
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
    <footer>All rights reserved 2024</footer>
</body>
</html>

