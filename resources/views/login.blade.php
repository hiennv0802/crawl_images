<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ env('APP_TITLE') }}</title>
    <link rel="stylesheet" href="{{ url('assets/css/skeleton.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <h1>{{ env('APP_TITLE') }}</h1>
        </header>
        <form method="GET" action="/login">
            <button class="button-primary">Login with Google</button>
        </form>
    </div>
</body>
</html>
