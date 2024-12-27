@extends('app')
@section('titulo', "Respuesta Mensaje")

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

    <div class="d-flex justify-content-center m-3">
        <h3 class="title">Respuesta al mensaje</h3>
        
          </div>

    <form method="POST" action="mensajes.php" name="formResponse" enctype="multipart/form-data" novalidate="true">
        <div class="form-group mt-2">
            <label for="asunto">Asunto: </label>
            <input  class="form-control" type="text" id='asunto' name="asunto"
                    value="{{$msjOrigen->getAsunto()}}" disabled>
        </div>
        <div class="form-group mt-2">
            <label for="dest" class="d-block">Destinatari@: </label>
            <input  class="form-control" type="text"
                    id='dest' name="dest" value="{{$msjOrigen->getNomRemi()}}" disabled="true">
            
        </div>
        
        
        <div class="form-group mt-2">
            <label for="txt">Texto: </label>
            <textarea  class="form-control" 
                       rows="4" cols="50" id='txt' name="txt"></textarea>
                
        </div>
        <input type="hidden" name="msjOrigen" value="{{base64_encode(serialize($msjOrigen))}}">
        <div class="form-group mt-2">
            <label for="fResMensaje"><i class="bi bi-paperclip"></i></label>
            <input type="file" class="form-control mt-2" id="fResMensaje" name="fResMensaje">
        </div>
        <div class="d-flex justify-content-end mt-3">
            <input type="submit" value="Enviar" class="btn float-right btn-success" name="envResMsj">
        </div>

    </form>

 </div>    
</div>
</div>   
@endsection
@section ('scripts')

@endsection
