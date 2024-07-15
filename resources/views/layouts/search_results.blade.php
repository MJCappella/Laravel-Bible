<!DOCTYPE html>
<html>
<head>
    <title>Search Results</title>
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

</body>
</html>
