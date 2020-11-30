<table>
    <thead>
    <tr>
        <th>Nombre</th>
        <th>Categoría</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Foto</th>
    </tr>
    </thead>
    <tbody>
    @foreach($games as $game)
        <tr>
            <td>{{$game->name}}</td>
            <td>{{$game->category->name}}</td>
            <td>{{$game->description}}</td>
            <td>{{$game->price}}</td>
            <td><img src="{{ public_path().'/'.$game->photo }}" width="40px"></td>
        </tr>
    @endforeach
    </tbody>
</table>
