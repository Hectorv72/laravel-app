<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- yield permite asignar una sección a el fragmento de codigo --}}
    {{-- al asignarle un valor por defecto se lo puede tomar como un string variable --}}
    <title>@yield('title', 'laravel app')</title>
</head>
<body>
    {{-- section es utilizado para establecer una sección del codigo que puede ser utilizado por sus hijos --}}
    @section('content')
        <h3>Contenido mostrado en caso de no ser usada la sección</h3>
        @show
</body>
</html>
