<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Listings </title>
</head>
<body>
    <h1>Available Jobs</h1>
        <ul>
            @forelse($jobs as $job)
                @if($loop->even)
                <li>Even: {{ $job }}</li>
                @else
                    <li>Odd: {{ $job }}</li>
                @endif
            @empty
                <li>No Jobs Available!</li>
            @endforelse
        </ul>
</body>
</html>

