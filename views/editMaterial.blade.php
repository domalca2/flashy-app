@extends('app')
@section('titulo', "Edición Publicación")

@section('cabecera')  
     

@section('contenido')
<div class="d-flex justify-content-center m-3">
    <h3 class="title">Edición Contenido</h3>  
    </div>

<div class="d-flex justify-content-center">  
    
    <form method="POST" action="materiales.php" enctype="multipart/form-data" novalidate="true">
       
        <label for="fOld">Foto actual del contenido: </label>
        <img data-lightbox src="{{$material->getFoto()}}" name="fOld" width="100" height="100">
        <input type="hidden" name="fotoOld" value="{{$material->getFoto()}}">
        <div class="form-group mt-2">
            <label for="fNMaterial">Elegir nueva foto: </label>&nbsp;
            <input type="file" class="{{ "form-control" . (isset($errorNFMaterial)) ? ($errorNFMaterial ? "is-invalid" : "is-valid") : "" }}" id="fNMaterial" name="fNMaterial">
            <div class="invalid-feedback">
                <p>nombre del archivo ya existe...</p>
            </div>
        </div>
        <div class="form-group mt-2">
            <label for="descripcion">Descripción: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <textarea  class="{{ "form-control" .(isset($errorNDesc))  ? ($errorNDesc) ? "is-invalid" : "is-valid" : "" }}"
                       rows="4" cols="50" id='descripcion' name="descripcion" required>{{isset($errorNDesc)||isset($errorNFMaterial)?$newDesc:$material->getDescripcion()}}</textarea>
                <div class=" invalid-feedback">
                <p>la descripción no puede estar vacía!!</p>
                
            </div>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <input type="submit" value="Modificar elemento" class="btn float-right btn-success" name="update">
        </div>

    </form>

</div>    
@endsection
@section ('scripts')

@endsection
