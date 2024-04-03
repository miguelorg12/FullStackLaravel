@extends ('templates.app')
@section('title')
    Iniciar sesión
@endsection
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-white">Iniciar sesión</h1>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Correo electrónico</label>
                                <input class="form-control" id="exampleInputEmail1" name="email" value="{{ old('email') }}">
                                <small class="form-text text-danger">
                                    @if ($errors->has('email'))
                                        {{ $errors->first('email') }}
                                    @endif
                                </small>
                            </div>
                            <div class="form-group mt-2">
                                <label >Contraseña</label>
                                <input class="form-control" id="exampleInputPassword1" name="password" type="password">
                                <small class="form-text text-danger">
                                    @if ($errors->has('password'))
                                        {{ $errors->first('password') }}
                                    @endif
                                </small>
                            </div>
                            <button type="submit" class="btn btn-dark mt-3">Iniciar sesión</button>
                            <a class="btn btn-danger mt-3" href="/">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection