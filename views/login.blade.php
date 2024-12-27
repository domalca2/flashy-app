@extends('app')
<!-- archivo css -->
<link rel="stylesheet" href="./asset/css/styles.css">

@section('titulo', "Login")

@section('cabecera')
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5TF9RV5X');</script>
    <!-- End Google Tag Manager -->


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="./css/estilos.css">
	<title>Aviso de Cookies</title>
    <div class=imagen style="text-align: center">
        <img src="./asset/diseño/banner1.png" class="img-fluid" style="max-width: 700px">
    </div>
    
</head>
@endsection      
@section('encabezado', "")
@section('contenido')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TF9RV5X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    
    <div class="container-md mt-5">
    <div class="d-flex flex-column align-items-center">
        @if(isset($nuevoUsu))
        <div class="alert alert-success mt-3">
            Nuevo Usuario Creado
        </div>
        
        @endif
        
        <div id='mensaje' class="d-none alert alert-danger my-3" role="alert">
            Credenciales incorrectos
        </div>
        <div class="card1">
            <div class="card-header" style="border-radius: 10px"  >
                
                <h3 style="color:aliceblue"> Introduce Usuario</h3>
            </div>
            <div class="card-body">
                
                </div>         

                <form id="login" method="POST" action="portada.php">
                    <div class="input-group my-2">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="usuario" id='usuario' name="usuario" value="<?= $usuario ?? '' ?>" required>
                    </div>
                    <div class="input-group my-2">
                        <span class="input-group-text"><i class="bi bi-key"></i></span>
                        <input type="password" class="form-control" placeholder="contraseña" id="password" name="password" required>
                    
                    </div>
                    <div class="input-group my-2">
                    Mostrar contraseña:
                    <input type="checkbox" id="mostrar_contrasena" onclick="mostrarPassword()">
                    </div>

                    <br>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-success" name="login">
                    </div>
                    
                </form>
                <a href="index.php?registro" class="btn btn-success">Registrate</a>       

            </div>
        </div>
    </div>
    <div class="form-group">
    
    </div>
</div>
<div class="aviso-cookies" id="aviso-cookies">
    <img class="logo" src="./asset/diseño/cookies.png" alt="Flashy">
    <h2 class="titulo">Cookies</h2>
    <p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
    <button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
    <a class="enlace" href="aviso-cookies.html">Aviso de Cookies</a>
</div>
<div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

<script src="js/aviso-cookies.js"></script>
</body>
@endsection
@section ('scripts')
<script src="./js/aviso-cookies.js"></script>
<script src="./js/validar.js"></script>
@endsection
