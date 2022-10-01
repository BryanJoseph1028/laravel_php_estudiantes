@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Eliminar una persona!</h5>
    <div class="card-body">
        
        <p class="card-text">
            <div class="alert alert-danger" role="alert">
                Estas seguro de eliminar este registro!!!

                <table class="table table-sm table-hover table-bordered" style="background-color: white">
                    <thead>
                        <th>carne</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>Tipo Sangre</th>
                        <th>Fecha de nacimiento</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $personas->paterno }}</td>
                            <td>{{ $personas->materno }}</td>
                            <td>{{ $personas->nombre }}</td>
                            <td>{{ $personas->fecha_nacimiento }}</td>
                        </tr>
                    </tbody>
                </table>
                <hr>
                <form action="{{ route('estudiante.destroy', $estudiante->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="{{ route("estudiantes.index") }}" class="btn btn-info" >
                        <span class="fas fa-undo-alt"></span> Regresar
                    </a>
                    <button class="btn btn-danger">
                        <span class="fas fa-user-times"></span> Eliminar 
                    </button>
                </form>
            </div>
        </p>
        
    </div>
</div>
@endsection
