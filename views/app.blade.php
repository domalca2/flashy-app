<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <!-- Bootstrap Font Icon CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <!-- archivo css -->
        <link rel="stylesheet" href="./asset/css/barranavegacion.css">
        <link rel="stylesheet" href="./asset/css/styles.css">
        

        <title>@yield('titulo')</title>
    </head>
    <body>

        @section('cabecera')
        @if(isset($usuario))       
        <nav class="menu">
            <section class="menu__container">
                <div class="navb-logo">
                    <a href="index.php" ><img src="./asset/diseño/logo.png"></a>
                    
                </div>
        
                <ul class="menu__links">

                    @yield('botones')

                    <li class="menu__item  menu__item--show">
                        
                        <a href="#" class="menu__link" style="font-size: 20px">
                            @if($usuario->getFoto_perfil() !== "./asset/fotos_perfil/" && $usuario->getFoto_perfil() !== null&& $usuario->getFoto_perfil() !== null)
                            <div class="profile-picture m-2">
                                <img src="<?=$usuario->getFoto_perfil()?>" width="35" height="35">
                            </div>    
                            @else
                            <i class="bi bi-person-circle me-2" style="font-size: 1.2em;"></i>
                            @endif
                        {{$usuario->getNombre()}}
                        <img src="asset/nav/arrow.svg" class="menu__arrow">
                        </a>

                        </div>
                        <ul class="menu__nesting">
                            <li class="menu__inside">
                                <a href="index.php" class="menu__link menu__link--inside">Inicio</a>
                            </li>
                            <li class="menu__inside">
                                <a href="materiales.php" class="menu__link menu__link--inside">Nueva Publicación</a>
                            </li>
                            <li class="menu__inside">
                                <a href="mensajes.php" class="menu__link menu__link--inside">Mansajes</a>
                            </li>

                            <li class="menu__inside">
                                <a href="#" id="eliminarCuenta" data-id-usuario="{{$usuario->getId()}}" class="menu__link menu__link--inside">Eliminar Cuenta</a>
                            </li>
                            <li class="menu__inside">
                                <a href="index.php?logout" class="menu__link menu__link--inside">Cerrar Sesion</a>
                            </li>
                        </ul>
                    </li>
        
                </ul>
        
                <div class="menu__hamburguer">
                    <img src="asset/nav/menu.svg" class="menu__img">
                </div>
            </section>
        
          
        </nav>
        @endif
        @show 
        <div class="container mt-3">
            <h3 class="text-center mt-3 mb-3">@yield('encabezado')</h3>
            @yield('contenido')
        </div>
        <br><br><br>
        
        <footer>       
                <div class="footer-content-container">
                    <span class="menu-title">Siguenos en:</span>
                    <div class="social-container">
                        <a href="https://facebook.com" class="social"><img class="imagen-social" src="./asset/footer/FacebookBlanco.png"></a>
                        <a href="https://instagram.com" class="social"><img class="imagen-social" src="./asset/footer/InstagramBlanco.png"></a>
                        <a href="https://linkedin.com" class="social"><img class="imagen-social" src="./asset/footer/LinkedinBlanco.png"></a>
                        <a href="https://twitter.com" class="social"><img class="imagen-social" src="./asset/footer/TwitterBlanco.png"></a>
                    </div>
                </div>
            <div class="copyright-container">
                <span class="copyright">Copyright 2024 ©, flashy.com. Todos los derechos reservados.</span>
            </div>
        </footer>

    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    @yield('scripts')
    <script src="./js/navmenu.js"></script>
    <script src="./js/confEliminaCuenta.js"></script>
    <script src="./js/imageneslightbox.js"></script>
</html>
