@extends('app')
@section('titulo', "mensajes de usuario")

@section('cabecera')  
@section('botones')
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
@if(isset($msjEnviado))
<div class="alert alert-success mt-3">
    <p>mensaje enviado</p>
</div>
@endif

</div>
    <div class="container mt-3">
        <div class="d-flex justify-content-center m-3">
            <h3 class="title">Mensajes</h3>
            
              </div>
        
        <table class="table table-striped ">
    <thead>
        <tr>
            <th scope="col" class="text-center text-white">Remitente</th>
            <th scope="col" class="text-center text-white">Asunto</th>
            <th scope="col" class="text-center text-white">Fecha de envío</th>
            <th scope="col" class="text-center text-white">Fichero adjunto</th>
        </tr>
    </thead>
    <tbody>
        @forelse($msjsUsuario as $msjUsu)
        <tr class="text-center">
           <td class="text-white">{{$msjUsu->getNomRemi()}}</td>
           @if(!$msjUsu->getLeido())
           <td class="text-white" ><a href="mensajes.php?msjShow&idMsj={{$msjUsu->getId()}}" class="text-decoration-none text-white"><b>{{$msjUsu->getAsunto()}}</b></a></td>
           @else
           <td class="text-white" ><a href="mensajes.php?msjShow&idMsj={{$msjUsu->getId()}}" class="text-decoration-none text-white">{{$msjUsu->getAsunto()}}</a></td>
           @endif          
           <td class="text-white" > {{$msjUsu->getFechaEnvio()}}</td>
           @if($msjUsu->getAdjunto()!== "./asset/archivos_mensajes/")
           <td class="text-white"><i class="bi bi-paperclip"></i></td>
           @else
           <td></td>
           @endif
        </tr>
        @empty
    <tr>
            <td colspan="1" class="text-center">no hay mensajes en el buzón de entrada</td>
        </tr>
        @endforelse
    </tbody>
</table>
    </div>    
</div>
</div>
<br><br><br><br><br><br><br><br>
@endsection
@section ('scripts')
@endsection