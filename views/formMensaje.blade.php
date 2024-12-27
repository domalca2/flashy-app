@extends('app')
@section('titulo', "Nuevo Mensaje")

@section('cabecera')  
@section('botones')
<li class="menu__item">
    <a href="mensajes.php?buzonEnt" class="menu__link">Buzón de entrada</a>
</li>  
<li class="menu__item">
    <a href="mensajes.php?menEnviados" class="menu__link">Mensajes enviados</a>
</li>  
<li class="menu__item">
    <a href="mensajes.php?papelera" class="menu__link">Papelera</a>
</li>  
      
@endsection
      

@section('contenido')
<div class="d-flex justify-content-center m-3">
    <h3 class="title">Redactar mensaje</h3>
    
      </div>
    
    
    

    <div class="container mt-9">   

    <form method="POST" action="mensajes.php" name="formMensaje" enctype="multipart/form-data" novalidate="true">
        <div class="form-group mt-2">
            <label for="asunto">Asunto: </label>
            <input  class="form-control" type="text" id='asunto' name="asunto"
                    value="{{isset($destVacio)||isset($destInexis)?$asunto:''}}">
        </div>
        <div class="form-group mt-2">
            <label for="dest" class="d-block">Destinatari@: </label>
            <input  class= "form-control {{ (isset($destVacio) || isset($destInexis)) ? ($destVacio || $destInexis) ? 'is-invalid' : '' : '' }}"
                    id="dest" name="dest" value="{{$destino??''}}">
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
                       rows="4" cols="50" id='txt' name="txt"><?= isset($destVacio)||isset($destInexis) ? $texto : '' ?></textarea>
                
        </div>
        <div class="form-group mt-2">
            <label for="fMensaje"><i class="bi bi-paperclip"></i></label>
            <input type="file" class="form-control mt-2" id="fMensaje" name="fMensaje">
        </div>
        <div class="d-flex justify-content-end mt-3">
            <input type="submit" value="Enviar" class="btn float-right btn-success" name="envMsj">
        </div>

    </form>

 </div>    
</div>
</div>   
@endsection
@section ('scripts')

@endsection