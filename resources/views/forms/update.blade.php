@extends('templates.app')
@section('title')
    Registro de personas
@endsection

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6">
        <h1 class="text-white">Actualizacion de persona</h1>
      <div class="card">
        <div class="card-body">
          <form method="post" action="{{ route('persona.update', ['id' => $persona->id]) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
              <label>Nombre</label>
              <input class="form-control" id="exampleInputEmail1" name="nombre" value="{{ old('nombre', $persona -> nombre) }}">
              <small class="form-text text-danger">
                @if ($errors->has('nombre'))
                  {{ $errors->first('nombre') }}
                @endif
              </small>
            </div>
            <div class="form-group mt-2">
              <label >Apellido Paterno</label>
              <input class="form-control" id="exampleInputEmail1" name="apellido_paterno" value="{{ old('apellido_paterno', $persona -> apellido_paterno) }}" >
              <small class="form-text text-danger">
                @if ($errors->has('apellido_paterno'))
                  {{ $errors->first('apellido_paterno') }}
                @endif
              </small>
            </div>
            <div class="form-group mt-2">
              <label >Apellido Materno</label>
              <input class="form-control" id="exampleInputEmail1" name="apellido_materno" value="{{ old('apellido_materno', $persona -> apellido_materno) }}">
              <small class="form-text text-danger">
                @if ($errors->has('apellido_materno'))
                  {{ $errors->first('apellido_materno') }}
                @endif
              </small>
            </div>
            <div class="form-group mt-2">
                <label for="sexo">Sexo</label>
                <select class="form-control" id="sexo" name="sexo">
                <option disabled>Seleccionar</option>
                <option value="Masculino" {{ $persona->sexo == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                <option value="Femenino" {{ $persona->sexo == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                </select>
            </div>
            <button type="submit" class="btn btn-dark mt-3">Guardar</button>
            <a class="btn btn-danger mt-3" href="/">Cancelar</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection