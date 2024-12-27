@extends('app')
@section('titulo', "Reenvio Mensaje")

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
<div class="container mt-9">
    <div class="d-flex justify-content-center m-3">
        <h3 class="title">Reenvio de mensaje</h3>
        
          </div>
      

    <form method="POST" action="mensajes.php" name="formResend" novalidate="true">
        <input type="hidden" name="idMsjOrigen" value="{{$msjOrigen->getId()}}">
        <div class="form-group mt-2">
            <label for="asunto">Asunto: </label>
            <input  class="form-control" type="text" id='asunto' name="asunto"
                    value="{{$msjOrigen->getAsunto()}}" disabled>
        </div>
        <div class="form-group mt-2">
            <label for="dest" class="d-block">Destinatari@s: </label>
            <input  class= "form-control {{ (isset($destVacio) || isset($destInexis)) ? ($destVacio || $destInexis) ? 'is-invalid' : '' : '' }}"
                    id="destino" name="destino" value="{{$destino??''}}">
            
            <div class=" invalid-feedback">
            @if(isset($destVacio)&&$destVacio)
            
            Destinatario no puede estar vacío
            @elseif (isset($destInexis)&&$destInexis)
            Destinatario indicado no existente
            @endif
            </div>
        </div>
        
        
        <div class="form-group mt-2">
            <label for="txt">Texto: </label>
            <textarea  class="form-control" 
                       rows="4" cols="50" id='txt' name="txt" disabled="true"><?= $msjOrigen->getTexto()?></textarea>
                
        </div>
        <div class="form-group mt-3">
            <label for="fMensaje"><i class="bi bi-paperclip"></i></label>
            @if($msjOrigen->getAdjunto() !== "./asset/archivos_mensajes/")
            <p class="mt-2">
               @if (pathinfo($msjOrigen->getAdjunto(), PATHINFO_EXTENSION) == 'pdf')
                    <a href="{{$msjOrigen->getAdjunto()}}" target="_blank">Ver PDF</a>
               @elseif (pathinfo($msjOrigen->getAdjunto(), PATHINFO_EXTENSION) == 'docx')
                     <a href="{{$msjOrigen->getAdjunto()}}" download>Descargar DOCX</a>
               @else
                     <img data-lightbox src="{{$msjOrigen->getAdjunto()}}" width="100" height="100">
               @endif
            </p>
            @endif
        </div>
        <div class="d-flex justify-content-end mt-3">
            <input type="submit" value="Enviar" class="btn float-right btn-success" name="reenvMsj">
        </div>

    </form>

 </div>    
</div>
</div>   
@endsection
@section ('scripts')

@endsection