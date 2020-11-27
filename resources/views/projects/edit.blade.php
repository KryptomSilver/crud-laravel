@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('projects.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nombre:</strong>
                    <input type="text" name="nombre" value="{{ $project->nombre }}" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>apellido_materno:</strong>
                    <textarea class="form-control" style="height:50px" name="apellido_materno"
                        placeholder="apellido_materno">{{ $project->apellido_materno }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>apellido_paterno:</strong>
                    <input type="text" name="apellido_paterno" class="form-control" placeholder="{{ $project->apellido_paterno }}"
                        value="{{ $project->apellido_paterno }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>direccion:</strong>
                    <input type="text" name="direccion" class="form-control" placeholder="{{ $project->direccion }}"
                        value="{{ $project->direccion }}">
                </div>
            </div><div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>numero_tel:</strong>
                    <input type="text" name="numero_tel" class="form-control" placeholder="{{ $project->numero_tel }}"
                        value="{{ $project->numero_tel }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection