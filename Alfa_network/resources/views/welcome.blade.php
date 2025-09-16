<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Character Network</title>

    @vite('resources/css/app.css')

</head>
<body class="text-center px-8 py-12">
    <h1>welcome to Character Network</h1>
    <p>Click the button below to see the Characters</p>

    <a href="/character" class="btn mt-4 inline-block">
        Character
    </a>
</body>
</html>
