<!DOCTYPE html>
<html>
<head>
    <title>Available Jobs</title>

</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> | <a href="{{ route('jobs.index') }}">Jobs</a>
    </nav>
    <h1>Available Jobs</h1>
    <ul>
        @foreach ($jobs as $job)
        <li>
            <a href="{{ route('jobs.show', $job->id) }}">
                {{ $job->title }} - {{ $job->salary }}
            </a>
        </li>
        @endforeach
    </ul>
</body>
</html>