<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Ferretería Vázquez</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light p-3 bg-dark">
        <a class="navbar-brand text-white" href="#">Ferretería Vázquez</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="#">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#productos">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Nosotros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Ubicación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Contacto</a>
                </li>
            </ul>
                <a href="<?php echo e(route('login')); ?>" class="btn btn-light">BETAV1</a>
        </div>
    </nav>
    
    
    <img src="images/fondo.jpg" class="img-fluid" alt="Responsive image">
    
    
    <div class="container-fluid">
        <div class="row text-center" id="productos">
            <div class="col-12">
                <h1>Productos</h1>
                <hr class="bg-dark">
            </div>
            <div class="col-12">
                <br>
            </div>
            <div class="col-4">
                <h3>Ferretería</h3>
                <img src="images/wrench.png" alt="..." class="rounded">

            </div>
            <div class="col-4">
                <h3>Plomería</h3>
                <img src="images/icon-46254.png" alt="..." class="rounded">
            </div>
            <div class="col-4">
                <h3>Electricidad</h3>
                <img src="images/technology.png" alt="..." class="rounded">

            </div>
            <div class="col-4">
                <h3>Pinturas</h3>
                <img src="images/icon-46274.png" alt="..." class="rounded">

            </div>
            <div class="col-4">
                <h3>Tornillería</h3>
                <img src="images/icon-92082.png" alt="..." class="rounded">

            </div>
            <div class="col-4">
                <h3>Materiales</h3>
                <img src="images/shovel.png" alt="..." class="rounded">

            </div>
            <div class="col-12">
                <br>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <h1>Nosotros</h1>
            </div>
            <div class="col-4">
                <h3>Historia</h3>
                <p class="text-justify">En Ferrecomercializadora Vázquez somos una empresa 100% Campechana laborando desde el año 2002, ofreciendo y llevando nuestros productos a todo el estado de Campeche. Contamos con servicio a domicilio. Aceptamos pago con tarjeta de crédito y débito. Aceptamos vales de CANACO.</p>
            </div>
            <div class="col-4">
                <h3>Misión</h3>
                <p>Servir con honestidad y dar un buen trato al cliente. Que el cliente salga satisfecho de la empresa con el buen servicio proveído por nuestro personal de mostrador.</p>
            </div>
            <div class="col-4">
                <h3>Visión</h3>
                <p>Que la empresa crezca de forma económica y socialmente, a la vez expandirse mediante nuevos puntos de venta a nivel estatal y regional.</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
                <h1>Nos encontramos en...</h1>
            </div>
            <div class="col-6">
                <h2>Plan Chac</h2>
                <p>Fraccionamiento Plan chac Avenida Jaina, entre Privada 1 y Privada 2 Local B.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3752.6964730581713!2d-90.49590278493721!3d19.852791832253914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f8312cb8e49013%3A0x96c6e2c74a650a1f!2sJaina+12%2C+Unidad+y+Trabajo%2C+24088+Campeche%2C+Camp.!5e0!3m2!1sen!2smx!4v1449644840948" frameborder="0"></iframe>
            </div>
            <div class="col-6">
                <h2>Colonial Campeche</h2>
                <p>Colonial Campeche calle Xcaret manzana 19 lote 5 entre Akumal y Ocosingo.</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d938.2106817550108!2d-90.48952957078784!3d19.84660176061554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85f83129eba22e6b%3A0xbb4336c9228bfecc!2sXcaret+33%2C+Amp+Kal%C3%A1+I%2C+24087+Campeche%2C+Camp.!5e0!3m2!1sen!2smx!4v1449645268927" frameborder="0"></iframe>
            </div>
        </div>
        
    </div>



    <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
</body>
</html>