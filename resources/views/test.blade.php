<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba de View</title>
</head>
<body>
    <h1>Test View Page</h1>
    <p>{{$saludo}} {{$usuarioId}}</p>
    <div>
        <table>
            <thead>
                <tr><th>Alumno</th><th>Carrera</th></tr>
            </thead>
            <tbody>
            @foreach ($alumnos as $a)
                <tr>
                    <td>{{$a->nombre}}</td>
                    <td>{{$a->carrera_nombre}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <table style="border-collapse: collapse;">
            <thead>
                <tr><th>#</th><th>IX</th><th>Nombre</th><th>otroDato</th></tr>
            </thead>
            <tbody>
               
            @foreach ($datosUsuarios as $usuario)
                <tr>
                    <td style="border: 1px solid black;">
                        {{$loop->iteration}}
                    </td>
                    <td style="border: 1px solid black;">
                        {{$loop->index}}
                    </td>
                    <td style="border: 1px solid black;">
                        {{$usuario['nombre']}}
                    </td>
                    <td style="border: 1px solid black;">
                        {{$usuario['otroDato']}}
                        @if ($usuario['otroDato'] == 5)
                            <strong>ES 5</strong>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
