<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados para las imágenes */
        .card-img-top {
            max-width: 175px; /* Define el ancho máximo de las imágenes */
            height: auto; /* Permite que la altura se ajuste automáticamente */
        }

        .logo-container {
            text-align: center; /* Centra el contenido del div */
            margin-bottom: 0px; /* Agrega espacio inferior para separar el logotipo del contenido */
        }
    </style>
</head>
<body>
    <div class="container-fluid bg-dark text-white p-4">
        
        <h1 class="display-4">Bienvenido a nuestra tienda de libros</h1>
        <p class="lead">Explora nuestra selección de libros y encuentra tu próxima lectura favorita.</p>  
    </div>

        <img src="logo/user.png" alt="Logo" class="img-fluid" style="position: absolute; top: 100px; right: 60px"; width= "100" height="100">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registrarse</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="logo-container">
            <img src="logo/logo.png" alt="Logotipo" class="img-fluid"; width= "229" height="202">
    </div>

    <nav class="navbar navbar-expand-lg navbar-black bg-white justify-content-center">
        <div class="container-fluid">
            <!--<a class="navbar-brand" href="#">Tu Tienda de Libros</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>-->
           <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><strong>Inicio</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="busqueda.php"><strong>Libros</strong></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carrito.php"><strong>Compras</strong></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-3 mx-auto">

        <div class="row d-flex justify-content-center">
            <div class="col-lg-2">
                <div class="card mb-4">
                    <img src="libros/ad99bd765ac6158cc5ec46f9df2b972d.webp" class="card-img-top" alt="Libro 1">
                    <div class="card-body">
                        <h5 class="card-title">Alas de Sangre</h5>
                        <p class="card-text">Rebecca Yarros</p>
                        <p class="card-text">Precio: 28.49</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-4">
                    <img src="libros/f261ec0717d823439ddf47bedc1323fe.webp" class="card-img-top" alt="Libro 2">
                    <div class="card-body">
                        <h5 class="card-title">La Asistenta</h5>
                        <p class="card-text">Freida McFadden</p>
                        <p class="card-text">Precio: 23.29</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-4">
                    <img src="libros/0618ea1266bf11401addc6d338864cdc.webp" class="card-img-top" alt="Libro 3">
                    <div class="card-body">
                        <h5 class="card-title">La Muerte de los Nobles</h5>
                        <p class="card-text">Douglas Benalcázar</p>
                        <p class="card-text">Precio: 12.75</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-4">
                    <img src="libros/a69843a9781cf90c167c7cb5f0e3b5bb.webp" class="card-img-top" alt="Libro 3">
                    <div class="card-body">
                        <h5 class="card-title">Dune</h5>
                        <p class="card-text">Frank herbert</p>
                        <p class="card-text">Precio: 28.11</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card mb-4">
                    <img src="libros/3fda62db53fae681fe69ec420d11570a.webp" class="card-img-top" alt="Libro 3">
                    <div class="card-body">
                        <h5 class="card-title">El Señor de los Anillos</h5>
                        <p class="card-text">J.R.R. Tolkien</p>
                        <p class="card-text">Precio: 25.27</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

