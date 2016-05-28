<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tasky</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>

    <body>
        @include('partials.nav')

        <div class="container">
            @yield('content')
        </div>

        <script src="/js/main.js"></script>
    </body>
</html>