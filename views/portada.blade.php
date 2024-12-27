@extends('app')
@section('titulo', "Portada")

@section('cabecera')  
@section('botones')


<li class="menu__item">
    <a href="mensajes.php" class="menu__link">Mensajes</a>
</li>      

@endsection


      

@section('contenido')
@if(isset($mateAdded)&&$mateAdded)
<div class="alert alert-success mt-3">
    <p>Nuevo contenido añadido con éxito</p>
</div>
@endif
@if(isset($actualizado)&&$actualizado)
<div class="alert alert-success mt-3">
    <p>contenido actualizado</p>
</div>
@endif
@if(isset($eliminado)&&$eliminado)
<div class="alert alert-success mt-3">
    <p>contenido eliminado</p>
</div>
@endif
<div class="row m-5">
    <div class="col-md-6">
<table class="table table-striped ">
    <thead>
        <tr>
            <th scope="col" style="font-size: 1.2em;" class="text-center text-white">Usuarios Registrados</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse($restoUsu as $usu)
        <tr class="text-center">
           <td><img data-lightbox src="{{ $usu->getFoto_perfil() !== null ? $usu->getFoto_perfil() : './asset/fotos_perfil/'}}" width="100" height="100" ></td>
           <td style="text-decoration: underline white"><a href="materiales.php?matUsu&idUsu=<?=$usu->getId()?>" class="text-decoration-none text-white">{{$usu->getNombre()}}</a></td>
            
        </tr>
        @empty
    <tr>
            <td colspan="1" class="text-center">Todavía no hay usuarios registrados</td>
        </tr>
        @endforelse
    </tbody>
</table>
    </div>
    

    <div class="col-md-6">
    
        
        <table class="table table-striped ">
    <thead>
        <tr>
            <th scope="col" style="font-size: 1.2em;" class="text-center text-white">Mis Publicaciones</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse($materiales as $material)
        <tr class="text-center">
           <td><img data-lightbox src="<?=$material->getFoto()?>" width="100" height="100"></td>
           <td ><a href="materiales.php?edicion&id=<?=$material->getId()?>"  class="text-decoration-none text-white">{{$material->getDescripcion()}}</a></td>
           <td><button data-material="{{$material->getId()}}" name="borraCont" id="borraCont" ><i class="bi bi-trash"></i></button></td> 
        </tr>
        @empty
    <tr>
            <td colspan="1" class="text-center">Todavía no has publicado nigún contenido</td>
        </tr>
        @endforelse
        
    </tbody>
</table>
&nbsp&nbsp&nbsp&nbsp<a href="materiales.php" class="btn btn-success mb-3">Nuevo Material</a>
    </div>    
    
</div>

<div>
</div>
@endsection
@section ('scripts')
<script src="./js/confEliminaMat.js"></script>
@endsection