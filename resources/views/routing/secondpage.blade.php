<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page 2</title>
</head>
<body>
    <h1>Esta es la pagina 2</h1>
    <a href="{{ route('page1') }}">Ir a la pagina 1</a>

    <p>En caso de recibir valores por la query dentro del controlador debemos obtenerlas de la siguiente manera:</p>
    <p>$request->query('param')</p>
</body>
</html>
