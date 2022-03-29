<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Datos Guardados</title>
</head>
<body>
    @if (session('mensaje'))
        <h2>{{session('mensaje')}}</h2>
        <h3>{{session('titulo')}}</h3>
    @else
        <p><strong>No se han guardado datos</strong></p>
    @endif
</body>
</html>
