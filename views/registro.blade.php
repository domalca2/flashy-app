@extends('app')
<!-- archivo css -->
<link rel="stylesheet" href="./asset/css/styles.css">
<!-- boxicons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
@section('titulo', "Registro")
@section('cabecera')
@endsection
@section('encabezado'      
)
<nav>
    <div class="d-flex justify-content-end">
        <a class="btn" href="index.php">Volver</a>
    </div>
</nav>
@endsection
@section('contenido')

    <div class="d-flex flex-column align-items-center">
        
        <div class="card2">
            <div class="card-header" style="border-radius: 10px">
                
        <h3 style="color:aliceblue"> Registrar Usuario</h3>
    </div>
    <div class="card-body">
        <form method="POST" id="formulario" class="formulario" action="registro.php" enctype="multipart/form-data" novalidate="true">

        <div class="formulario__grupo" id="grupo__usuario">
            <label for="usuario" class="formulario__label">Usuario: </label><br>
            
                <input type="text" maxlength="12" size="31" class="<?= "form-control" . ((isset($errorNombre)) || (isset($nombreRepe))) ? ($errorNombre || $nombreRepe) ? "is-invalid" : "is-valid" : "" ?>" id='usuario' name="usuario" value="<?= $nombreUsuario ?? '' ?>" required>&nbsp;*
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
            <div id="errorusuario" disabled > 
                    
            </div>
            <div id="usuarioerror"class=" invalid-feedback">
                @if($errorNombre)
                <p>usuario debe contener entre 3 y 12 caracteres no especiales </p>
                @else
                <p>usuario existente</p>
                @endif
            </div>
        </div>


        <div class="form-group mt-2">
            <label for="password">Contraseña: </label><br>
            <input type="password" maxlength="15" size="31" class="<?= "form-control" . (isset($errorPass)) ? ($errorPass ? "is-invalid" : "is-valid") : "" ?>" id="password"
                   value="<?= isset($errRegistro) ? $pass : '' ?>"name="password" required>&nbsp;*
                   <i id="ojo1"class='bx bx-hide' ></i>
                   <div id="errorpassword" disabled > 
                    
                   </div>
            <div class=" invalid-feedback">
                <p>La contraseña debe contener entre al menos 6 caracteres con al menos 1 de ellos especial</p>
            </div>

        </div>
        <div class="form-group mt-2">
            <label for="password2">Repetir contraseña: </label><br>
            <input type="password" maxlength="15" size="31"  class="<?= "form-control" . (isset($errorPass2)) ? ($errorPass2 ? "is-invalid" : "is-valid") : "" ?>" id="password2"
                   value="<?= isset($errRegistro) ? $pass2 : '' ?>"name="password2" required  >&nbsp;*
                   <i id="ojo2" class='bx bx-hide' ></i>
                   <div id="errorpassword2" disabled >
                    
                   </div>
            <div class=" invalid-feedback">
                <p>Las contraseñas no coinciden</p>
            </div>
        
        <div class="form-group mt-2">
            <label for="email">Correo Electronico: </label><br>
            <input type="email" size="31"  class="<?= "form-control" . (isset($errorEmail)) ? ($errorEmail ? "is-invalid" : "is-valid") : "" ?>" id="email"
                   value="<?= isset($errRegistro) ? $email : "" ?>"name="email">
            <div class=" invalid-feedback">
                <p>Introducir email válido</p>
            </div>
        </div>
        <div class="form-group mt-2">
            <label for="fPerfil">Foto perfil: </label>&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="file" class="<?= "form-control" . (isset($errorFoto)) ? ($errorFoto ? "is-invalid" : "is-valid") : "" ?>" id="fPerfil"
                   name="fPerfil">
            <div class=" invalid-feedback">
                <p>nombre del archivo ya existe...</p>
            </div>
        </div>
        <div class="formulario__grupo" id="grupo__terminos">
            <label class="formulario__label">
                <input class="formulario__checkbox"  type="checkbox" onchange="cambioboton()" name="terminos" id="terminos" required>
                <a href="./condiciones.html">Acepto los Terminos y Condiciones*</a>
            </label>
        </div>
        <div class="d-flex justify-content-end mt-3">
            <input type="submit" id="submit" value="Registrar" class="btn float-right " name="registro" disabled>
        </div>

    </form>
    </div>
        </div>
    </div>
</div>
@endsection
@section ('scripts')
<script src="./js/registrosimple.js"></script>

@endsection
