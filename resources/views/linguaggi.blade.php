<!-- resources/views/layouts/app.blade.php -->
<html>

<head>
    <title>Il mio blog</title>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>linguaggi</title>
    </head>

<body>
    <h1>{{ $title }}</h1>
    <ul>
        @forelse ($linguaggi as linguaggio)
        <li>{{ $linguaggi }}</li>
    </ul>
</body>

</html>