@extends('app')
@section('titulo', "Nueva Publicación")

@section('cabecera')  

      

@section('contenido')


<div class="d-flex justify-content-center m-3">
    <h3 class="title">Nuevo contenido</h3>
    
      </div>

<div class="d-flex justify-content-center">    
    

    <form method="POST" action="materiales.php" enctype="multipart/form-data" novalidate="true">

        
        <div class="form-group mt-2">
            <label for="fMaterial">Foto nuevo contenido: </label>&nbsp;
            <input type="file" class="<?= "form-control" . (isset($errorFMaterial)) ? ($errorFMaterial ? "is-invalid" : "is-valid") : "" ?>" id="fMaterial" name="fMaterial">
            <div class="invalid-feedback">
                <p>nombre del archivo ya existe...</p>
            </div>
        </div>
        <div class="form-group mt-2">
            <label for="descripcion">Descripción: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <textarea  class="<?= "form-control" .(isset($errorDescrip))  ? ($errorDescrip) ? "is-invalid" : "is-valid" : "" ?>"
                       rows="4" cols="50" id='descripcion' name="descripcion" required><?= isset($descripcionGuardada) ? $descripcionGuardada : '' ?></textarea>&nbsp;*
                <div class=" invalid-feedback">
                <p>la descripción no puede estar vacía!!</p>
                
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <input type="submit" value="Añadir elemento" class="btn float-right btn-success" name="add">
        </div>

    </form>

</div>    
<br><br><br>
@endsection
@section ('scripts')

@endsection