@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Calificaciones</div>

                    <div class="card-body">
                        @foreach($calificaciones as $calificacion)
                            @if($calificacion === 10)
                                <div class="alert alert-success" role="alert">
                                    Su calificación es {{$calificacion}}. Aprobó!
                                </div>
                            @elseif($calificacion > 5 && $calificacion < 10)
                                <div class="alert alert-warning" role="alert">
                                    Su calificación es {{$calificacion}}. Puede recuperarla.
                                </div>
                            @else
                                <div class="alert alert-danger" role="alert">
                                    Su calificación es {{$calificacion}}. Ha reprobado.
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Meses</div>
                    <div class="card-body">
                        @foreach($meses as $mes)
                            @switch($mes)
                                @case(1)
                                <div class="alert alert-primary" role="alert">
                                    En Enero, no hay habilitaciones.
                                </div>
                                @break
                                @case(2)
                                <div class="alert alert-secondary" role="alert">
                                    En Febrero, sí hay habilitaciones.
                                </div>
                                @break
                                @case(3)
                                <div class="alert alert-secondary" role="alert">
                                    En Marzo, sí hay habilitaciones.
                                </div>
                                @break
                                @case(4)
                                <div class="alert alert-primary" role="alert">
                                    En Abril, no hay habilitaciones.
                                </div>
                                @break
                                @case(5)
                                <div class="alert alert-secondary" role="alert">
                                    En Mayo, sí hay habilitaciones.
                                </div>
                                @break
                                @case(6)
                                <div class="alert alert-primary" role="alert">
                                    En Junio, no hay habilitaciones.
                                </div>
                                @break
                                @case(7)
                                <div class="alert alert-primary" role="alert">
                                    En Julio, no hay habilitaciones.
                                </div>
                                @break
                                @case(8)
                                <div class="alert alert-primary" role="alert">
                                    En Agosto, no hay habilitaciones.
                                </div>
                                @break
                                @case(9)
                                <div class="alert alert-primary" role="alert">
                                    En Septiembre, no hay habilitaciones.
                                </div>
                                @case(10)
                                <div class="alert alert-primary" role="alert">
                                    En Octubre, no hay habilitaciones.
                                </div>
                                @case(11)
                                <div class="alert alert-primary" role="alert">
                                    En Noviembre, no hay habilitaciones.
                                </div>
                                @case(12)
                                <div class="alert alert-primary" role="alert">
                                    En Diciembre, no hay habilitaciones.
                                </div>
                                @break
                                @default
                                Mes desconocido o no tomado en cuenta
                                @break
                            @endswitch
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Tabla de multiplicar</div>
                    <div class="card-body text-center">
                        @for ($i = 1; $i <=10; $i++)
                            <button type="button" class="btn btn-primary mt-4">
                                5 x {{$i}} = <span class="badge badge-light">{{5 * $i}}</span>
                            </button>
                            <br>
                        @endfor
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Usuarios</div>
                    <div class="card-body text-center">
                        @forelse($usuarios as $usuario)
                            <p>{{$usuario}}</p>
                        @empty
                            <p>No hay usuarios</p>
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-header">Estado empleado</div>
                    <div class="card-body text-center">
                        @while ($estado === true)
                            <span class="badge badge-success">Activo</span>
                            @break
                        @endwhile
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
