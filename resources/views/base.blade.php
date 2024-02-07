<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>@yield('title')|Homie</title>
</head>
<body class="bg-gray-100">
    <header>
        @include('partiels/header')
    
           @yield('hero')

       
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        @include('partiels/footer')
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>
