<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explorar</title>
</head>
<body>
    <h1>Categorias</h1>
        @foreach ($dato_categorias as $dato)
            <div>
                <a href="#">{{$dato->nombre_cat}}</a>
            </div>
        @endforeach

    <h1>juegos</h1>
        @foreach ($dato_tipos_juego as $dato_juego)
            <div>
                <a href="#">{{$dato_juego->nombre_tipo_juego}}</a>
            </div>
        @endforeach
</body>
</html>