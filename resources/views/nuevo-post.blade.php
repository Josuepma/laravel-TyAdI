<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <title>Nuevo Post</title>
</head>
<body>
    <form id="formNuevoPost" method="POST" action="{{url('posts')}}">
        @csrf
        <div>
            <label for="txtTitulo">Titulo:</label>
            <input type="text" id="txtTitulo" name="titulo" required />
        </div>
        <div>
            <label for="txtDescripcion">Descripción:</label>
            <textarea id="txtDescripcion" name="descripcion" required></textarea>
        </div>
        <div>
            <button id="btnGuardar" type="submit">Guardar</button>
        </div>
        <div>
            <a href="{{route('usuarios.mostrar', ['usuarioId' => 'lfloresd'])}}">Ver usuario X</a>
        </div>
    </form>
    <script>        

        const urlEnviarDatos = "{{route('ajax.guardar-post')}}";
        const formNuevoPost = document.getElementById('formNuevoPost');

        formNuevoPost.addEventListener('submit', function (e) {
            
            e.preventDefault();

            const fetchOpt = {
                method: 'POST',
                body: new FormData(formNuevoPost)
            };
            fetch(urlEnviarDatos, fetchOpt)
                .then(r => r.json())
                .then(d => {
                    console.log(d);
                    alert(d.mensaje);
                    alert(d.titulo);
                });
        });

    </script>
</body>
</html>