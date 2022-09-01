<!DOCTYPE html>
<html lang='ar' dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        <link rel="stylesheet" href="/css/app.css'">
        <link rel="stylesheet" href="/bootstrap/css/bootstrap.rtl.min.css" />
        <script src="/js/app.js" defer></script>
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
        <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/bootstrap/js/jquery.js"></script>
    </body>
</html>
