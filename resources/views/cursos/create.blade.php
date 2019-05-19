@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear cursos <a href="{{route('cursos')}}" style="float: right;" class="btn btn-primary pull-right">Volver</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="post" action="{{route('cursos.store')}}">
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input name="name" type="text" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripcion:</label>
                            <input type="text" class="form-control" id="description" name="description" required>
                        </div>
                        <div class="form-group">
                            <label for="matter">Area:</label>
                            <input type="text" name="matter"  class="form-control" id="matter">
                        </div>
                        <div class="form-group">
                            <label for="credits">Creditos:</label>
                            <input type="number" name="credits" class="form-control" id="credits" required>
                        </div>
                        <div class="form-group">
                            <label for="duration">Duración:</label>
                            <input type="text" name="duration" class="form-control" id="duration" required>
                        </div>

                        <button type="submit" class="btn btn-default">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
