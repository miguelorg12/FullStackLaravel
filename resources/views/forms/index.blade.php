@extends('templates.app')
@section('title')
    Lista de personas
@endsection
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
                @if (count($personas) > 0)
                    <table class="table table-striped table-hover table-light">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Apellido materno</th>
                                <th>Sexo</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                                <tr>
                                    <td>{{ $persona->id }}</td>
                                    <td>{{ $persona->nombre }}</td>
                                    <td>{{ $persona->apellido_paterno }}</td>
                                    <td>{{ $persona->apellido_materno }}</td>
                                    <td>{{ $persona->sexo }}</td>
                                    <td><a href="/persona/{{$persona->id}}" type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a></td>
                                    <td>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{$persona->id}}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @foreach ($personas as $persona)
                        <div class="modal fade" id="confirmDeleteModal{{ $persona->id }}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel">Confirmar eliminación</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estás seguro de que quieres eliminar a {{ $persona->nombre }}?
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="{{ route('persona.destroy', $persona->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p class="text-white mt-3" style="font-size: 3rem;">No hay personas registradas.</p>
                @endif
            </div>
        </div>
    </div>
@endsection
