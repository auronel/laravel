@extends('plantillas.plantilla')
@section('titulo')
    Academia s.a.
@endsection
@section('cabecera')
    Gestión de alumnos
@endsection
@section('contenido')
    @if ($text=Session::get('mensaje'))
        <p class="alert alert-danger my-3">{{$text}}</p>
    @endif
    <a href="{{route('alumnos.create')}}" class="btn btn-info my-3">Crear alumno</a>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Detalles</th>
            <th scope="col" class="align-middle">Apellidos, Nombre</th>
            <th scope="col" class="align-middle">Mail</th>
            <th scope="col" class="align-middle">Imagen</th>
            <th scope="col" class="align-middle">Acciones</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $alumno)
                <tr>
                    <th scope="row">
                        <a href="{{route('alumnos.show',$alumno)}}" style="text-decoration:none"><i class="fa fa-address-card fa-3x"></i></a>
                    </th>
                    <td class="align-middle">{{$alumno->apellidos.", ".$alumno->nombre}}</td>
                    <td class="align-middle">{{$alumno->mail}}</td>
                    <td class="align-middle">
                        <img src="{{asset($alumno->logo)}}" width="60px" height="60px" class="img-fluid rounded-circle">
                    </td>
                    <td class="align-middle">#</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$alumnos->links()}}
@endsection