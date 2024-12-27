@extends('app')
@section('titulo', "lectura de mensaje enviado")

@section('cabecera')  
@section('botones')
<li class="menu__item">
    <a href="mensajes.php?buzonEnt" class="menu__link">Buzón de entrada</a>
</li>
<li class="menu__item">
    <a href="mensajes.php?redactar" class="menu__link">Redactar Mensaje</a>
</li>  
<li class="menu__item">
    <a href="mensajes.php?menEnviados" class="menu__link">Mensajes enviados</a>
</li>  
<li class="menu__item">
    <a href="mensajes.php?papelera" class="menu__link">Papelera</a>
</li>  
      
@endsection

      

@section('contenido')

<div class="container mt-5">

    <div class="d-flex justify-content-center">
        <div class="card">
        <div class="card-header">Detalles del mensaje enviado</div>
        <div class="card-body">
            <h5 class="card-title">Asunto: {{ $msjSelecc->getAsunto() }}</h5>
            <p class="card-text">Para: {{ $msjSelecc->getNomDesti() }}</p>
            <p class="card-text">Fecha: {{ $msjSelecc->getFechaEnvio() }}</p>
            <p class="card-text">Contenido: {{ $msjSelecc->getTexto() }}</p>
            <p class="card-text">fichero Adjunto:
                @if($msjSelecc->getAdjunto() !== "./asset/archivos_enviados/")
                <img data-lightbox src="<?=$msjSelecc->getAdjunto()?>" width="100" height="100">
                @endif
            </p>
            <!-- eliminar msj enviado -->
            <button data-enviado="{{$msjSelecc->getId()}}" name="borraEnv" id="borraEnv" ><i class="bi bi-trash"></i></button>
        </div>
    </div>
        @if(isset($msjsHilo))
        <div class="card">
            <div class="card-header">Historico de mensajes</div>
            <div class="card-body">
            @foreach(array_reverse($msjsHilo) as $msjHilo)
           
            @if($msjHilo !== null)
            <p class="card-text">De: {{ $msjHilo->getNomRemi() }}</p>
            <p class="card-text">Fecha: {{ $msjHilo->getFechaEnvio() }}</p>
            <p class="card-text">Contenido: {{ $msjHilo->getTexto() }}</p>
            <p class="card-text">fichero Adjunto:
                @if($msjHilo->getAdjunto() !== "./asset/archivos_mensajes/")
                <img data-lightbox src="<?=$msjHilo->getAdjunto()?>" width="100" height="100">
                @endif
            </p>
            @else
            <p class="card-title">Mensaje eliminado por su remitente</p>
            @endif
            <hr>
            @endforeach
            </div>
        </div>
        @endif
            
        
        
    </div>    
</div>
</div>
@endsection
@section ('scripts')
<script src="./js/confEliminaEnv.js"></script>
@endsection