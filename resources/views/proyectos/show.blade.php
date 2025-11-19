@extends('layouts.master')

@section('content')

    <div class="row m-4">
        <div class="col-sm-4">
            <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px"/></a>
        </div>
        <div class="col-sm-8">

            <header>
                <h3>{{ $proyecto['nombre'] }}</h3>
                <h4>Docente ID: {{$proyecto['docente_id']}}</h4>
            </header>
            <p>
                <a href="http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}">
                    http://github.com/2DAW-CarlosIII/{{ $proyecto['dominio'] }}
                </a>
            </p>
            <footer>
                <p>Fecha inicio: {{$proyecto['metadatos']['fecha_inicio']}}</p>
                <p>Fecha fin: {{$proyecto['metadatos']['fecha_fin']}}</p>
                <p>Calificacion: {{$proyecto['metadatos']['calificacion']}}</p>
                @if ($proyecto['metadatos']['calificacion'] >= 5)
                    <p>Estado: <strong style="color: green;">Proyecto aprobado<strong></p>
                    <button class="btn" >Suspender proyecto</button>
                @elseif($proyecto['metadatos']['calificacion'] < 5)
                    <p>Estado: <strong style="color: red">Proyecto suspenso<strong></p>
                    <button class="btn" style="background-color: rgb(46, 128, 236);">Aprobar proyecto</button>
                @endif
                <p></p>
                <ul class="actions">
                            <li><a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getEdit'], ['id' => $id]) }}" class="button alt">Editar proyecto</a></li>
                            <li><a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getIndex']) }}" class="button alt">Todos los proyectos</a></li>
                </ul>
            </footer>

        </div>
    </div>

@stop
