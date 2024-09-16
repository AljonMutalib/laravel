<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
</head>

<body>
    <h1>Page 1: {{ $artist }}</h1>

    {{ $months[0] }}
    {{ $months[1] }}
    
    @include('includes.menu')

</body>

</html>
