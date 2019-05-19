@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">CURSOS <a href="{{route('create')}}" style="float: right;" class="btn btn-primary pull-right">Crear curso</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <td>Nombre</td>
                              <td>Descripcion</td>
                              <td>Area</td>
                              <td>Duracion</td>
                              <td colspan="2">Acciones</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cursos as $curso)
                            <tr>
                                <td>{{$curso->name}}</td>
                                <td>{{$curso->description}}</td>
                                <td>{{$curso->matter}}</td>
                                <td>{{$curso->duration}}</td>
                                <td><a href="{{route('cursos.edit',$curso->id)}}" class="btn btn-primary">Editar</a></td>
                                <td><a onclick="deleteCurse({{$curso->id}})" class="btn btn-primary">Eliminar</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
