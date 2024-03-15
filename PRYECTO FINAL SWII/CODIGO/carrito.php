<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras - Tienda de Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Tienda de Libros</a>
            <!-- Botón para mostrar/cerrar el menú en dispositivos pequeños -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Contenido del menú -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="#">Libros</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="busqueda.php">Libros</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="logo-container d-flex justify-content-center">
        <img src="logo/logo.png" alt="Logotipo" class="img-fluid"; width= "229" height="202">
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Carrito de Compras</h2>
        <div class="row">
            <div class="col-md-8">
                <!-- Listado de libros en el carrito -->
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Título del libro</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Autor</h6>
                        <p class="card-text">Descripción breve del libro.</p>
                        <p class="card-text">Precio: $XX.XX</p>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </div>
                </div>
                <!-- Repetir el bloque de la tarjeta del libro para cada libro en el carrito -->

                <!-- Botón para vaciar el carrito -->
                <button class="btn btn-danger">Vaciar Carrito</button>
            </div>
            <div class="col-md-4">
                <!-- Resumen del carrito -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Resumen del Carrito</h5>
                        <p class="card-text">Total de libros: XX</p>
                        <p class="card-text">Total a Pagar: $XX.XX</p>
                        <a href="#" class="btn btn-primary">Finalizar Compra</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
