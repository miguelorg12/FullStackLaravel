extends ('templates.app')
@section('title')
    Registro de usuarios
@endsection

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-white">Registro de usuarios</h1>
                <div class="card">
                    <div class="card-body">
                        <form method="post" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label>Nombre</label>
                                <input class="form-control" id="exampleInputEmail1" name="name" value="{{ old('name') }}">
                                <small class="form-text text-danger">
                                    @if ($errors->has('name'))
                                        {{ $errors->first('name') }}
                                    @endif
                                </small>