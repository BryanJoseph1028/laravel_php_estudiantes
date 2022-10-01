@extends('layout/plantilla')

@section("tituloPagina", "Crear un nuevo registro")

@section('contenido')
<div class="card">
    <h5 class="card-header">Actualizar un Nuevo Estudiante</h5>
    <div class="card-body">
        <p class="card-text">
            <form action="{{ route('estudiante.update', $estudiante->id) }}" method="POST">
                @csrf
                @method("PUT")
                <label for="lbl_id" class="form-label"><b>ID</b></label>
                <input type="text" name="txt_id" id="txt_id" class="form-control" value="0" readonly>
            </div>
            <div class="mb-3">
                <label for="lbl_carne" class="form-label"><b>Carne</b></label>
                <input type="text" name="txt_carne" id="txt_carne" class="form-control" placeholder="Codigo E001-45645" >
            </div>
            <div class="mb-3">
                <label for="lbl_nombres" class="form-label"><b>Nombres</b></label>
                <input type="text" name="txt_nombres" id="txt_nombres" class="form-control" placeholder="nombre 1 nombre2" >
            </div>
            <div class="mb-3">
                <label for="lbl_apellidos" class="form-label"><b>Apellidos</b></label>
                <input type="text" name="txt_apellidos" id="txt_apellidos" class="form-control" placeholder="apellido 1" >
            </div>
            <div class="mb-3">
                <label for="lbl_direccion" class="form-label"><b>Direccion</b></label>
                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" placeholder="San lucas Sac" >
            </div>
            <div class="mb-3">
                <label for="lbl_correo_electronico" class="form-label"><b>Correo Electronico</b></label>
                <input type="text" name="txt_correo" id="txt_correo" class="form-control" placeholder="bchacajc@miumg.edu.gt" >
            </div>

            <div class="mb-3">
              <label for="lbl_sangre" class="form-label"><b>Sangre</b></label>
              <select class="form-select" name="drop_sangre" id="drop_sangre">
                <option value="0">---Sangre--- </option>
                <?php
                include("datos_conexion.php");
                $db_conexion = mysqli_connect($db_host,$db_usr,$db_pass,$db_nombre);
                $db_conexion -> real_query("SELECT id_tipo_sangre as id,sangre from tipo_sangre;");
                $resultado =  $db_conexion -> use_result();
                while($fila = $resultado-> fetch_assoc()){
                    echo"<option value=".$fila['id'].">".$fila['sangre']."</option>";

                }

                    $db_conexion ->close();
                ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="lbl_fn" class="form-label"><b>Fecha Nacimiento</b></label>
                <input type="date" name="txt_fn" id="txt_fn" class="form-control" placeholder="aa-mm-dd" >
            </div>   
                <br>
                <a href="{{ route("estudiantes.index") }}" class="btn btn-info" >
                    <span class="fas fa-undo-alt"></span> Regresar
                </a>
                <button class="btn btn-warning">
                    <span class="fas fa-user-edit"></span> Actualizar
                </button>
                
            </form>
        </p>
        
    </div>
</div>
@endsection