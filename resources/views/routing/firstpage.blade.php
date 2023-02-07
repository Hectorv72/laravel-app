<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 1</title>
</head>
<body>
    <h1>Esta es la pagina 1</h1>
    <p>Para redireccionar hacia una pagina utilizaremos la funcion route(name) </p>
    <a href="{{ route('page2') }}">Ir a la pagina 2</a>
    <br>
    <p>Si queremos hacer envio de datos por medio de la url solo tenemos que pasar como segundo parametro el listado de querys route(name, list) </p>
    <a href="{{ route('page2', ['say' => "Hello world"]) }}">Ir a la pagina 2</a>
</body>
</html>
