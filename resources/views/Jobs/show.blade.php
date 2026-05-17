<!DOCTYPE html>
<html>
<head>
    <title>Job Detail</title>
    
</head>
<body>
    <nav>
        <a href="{{ route('home') }}">Home</a> | <a href="{{ route('jobs.index') }}">Jobs</a>
    </nav>
    <h1>{{ $job->title }}</h1>
    <p>Salary: {{ $job->salary }}</p>
    <p>Description: {{ $job->description }}</p>
    <br>
    <a href="{{ route('jobs.index') }}">Back to job list</a>
</body>
</html>