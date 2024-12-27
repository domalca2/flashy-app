@extends('app')
@section('titulo', "mensajes de papelera")

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
  
      
@endsection
      

@section('contenido')

<div class="container mt-3">
</div>
    <div >
          <div class="d-flex justify-content-center m-3">
        <h3 class="title">Papelera</h3>
        
          </div>
        
        <table class="table table-striped">
    <thead>
        <tr>
            <th scope="col" class="text-center text-white">Remitente</th>
            <th scope="col" class="text-center text-white">Asunto</th>
            <th scope="col" class="text-center text-white">Fecha de envío</th>
            <th scope="col" class="text-center text-white">Fichero adjunto</th>
        </tr>
    </thead>
    <tbody>
        @forelse($msjsPapelera as $msjUsu)
        <tr class="text-center">
           <td class="text-white">{{$msjUsu->getNomRemi()}}</td>
           <td class="text-white" style="text-decoration: underline white"><a href="mensajes.php?msjPapeShow&idMsj={{$msjUsu->getId()}}" class="text-decoration-none text-white">{{$msjUsu->getAsunto()}}</a></td>
           <td class="text-white"> {{$msjUsu->getFechaEnvio()}}</td>
           @if($msjUsu->getAdjunto()!== "./asset/archivos_mensajes/")
           <td class="text-white"><i class="bi bi-paperclip"></i></td>
           @else
           <td></td>
           @endif
        </tr>
        @empty
    <tr>
            <td colspan="4" class="text-center text-white">no hay mensajes en la papelera</td>
        </tr>
        @endforelse
    </tbody>
</table>
<div class="d-flex justify-content-between align-items-center mb-5">
    &nbsp;&nbsp;<button class="btn btn-secondary text-white" {{empty($msjsPapelera)?'disabled':''}}>
                <a class="text-decoration-none text-white" href="mensajes.php?vaciaPape">Vaciar Papelera</a>
            </button>

</div>
    </div>    
</div>
</div>
<br><br><br><br><br><br><br><br><br><br>
@endsection
@section ('scripts')
@endsection