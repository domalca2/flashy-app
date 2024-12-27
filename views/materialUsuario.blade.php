@extends('app')
@section('titulo', "material de usuario")

@section('cabecera')  
      

@section('contenido')
<div class="d-flex justify-content-center m-5">
    @if($usuSolicitado->getFoto_perfil() !== './asset/fotos_perfil/' &&$usuSolicitado->getFoto_perfil() !== null)
    <h3 class="title">Contenido compartido por <img data-lightbox src="{{ $usuSolicitado->getFoto_perfil() }}" style="border-radius: 50%" width="45" height="45">{{ $usuSolicitado->getNombre() }}</h3>
    @else
        <h3 class="title">Contenido compartido por <i class="bi bi-person-circle me-2" style="font-size: 1.2em;"></i>{{ $usuSolicitado->getNombre() }}</h3>
    @endif    
</div>

    
    
    

    <div class="d-flex justify-content-center">
    
        
        <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" class="text-center text-white">Imagen del contenido</th>
            <th scope="col" class="text-center text-white">Descripción</th>
        </tr>
    </thead>
    <tbody>
        @forelse($matsUsuario as $matUsu)
        <tr class="text-center text-white">
           <td><img data-lightbox src="<?=$matUsu->getFoto()?>" width="100" height="100"></td>
           <td class="text-center text-white"> {{$matUsu->getDescripcion()}}</td>
        </tr>
        @empty
    <tr>
            <td colspan="1" class="text-center text-white">Todavía no ha publicado ningún contenido</td>
        </tr>
        @endforelse
    </tbody>
</table>
    </div>    
    <br><br><br><br><br><br><br>   
@endsection
@section ('scripts')
@endsection