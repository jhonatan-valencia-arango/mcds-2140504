<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de juegos</title>
</head>
<style>
    table {
        border: 1px solid #aaa;
        border-collapse: collapse;
        align-content: center;
    }
    table th, table td {
        font-family: sans-serif;
        font-size: 10px;
        border: 1px solid #ccc;
        padding: 4px;
    }
    table tr:nth-child(odd) {
        background-color: #eee;
    }
    table th {
        background-color: #666;
        color: #fff;
        text-align: center;
    }
</style>
<body>
    <table>
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Imagen</th>
        </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
                <tr>
                    <td>{{$game->name}}</td>
                    <td>{{$game->category->name}}</td>
                    <td>{{$game->description}}</td>
                    <td>{{$game->price}}</td>
                    <td><img src="{{ public_path().'/'.$game->image }}" width="40px"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
