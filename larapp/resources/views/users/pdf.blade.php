<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de usuarios</title>
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
            <th>Nombre completo</th>
            <th>Correo electrónico</th>
            <th>Teléfono</th>
            <th>Fecha de nacimiento</th>
            <th>Foto</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->fullname}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone}}</td>
                    <td>{{$user->birthdate}}</td>
                    <td><img src="{{ public_path().'/'.$user->photo }}" width="40px"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
