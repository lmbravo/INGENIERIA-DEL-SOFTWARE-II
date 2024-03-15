<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
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
                        <a class="nav-link" href="carrito.php">Carrito</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contenido de la página -->
    <div class="container mt-5">
        <h1>Listado de Libros</h1>
        
        <!-- Barra de búsqueda -->
        <form class="mb-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar libros...">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>

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

        <!-- Aquí iría el listado de libros obtenido de la base de datos -->
        <!--<?php
        // Incluir archivo de conexión a la base de datos
        //include 'conexion.php';

        // Consulta para obtener los libros desde la base de datos (ejemplo)
        $query = "SELECT * FROM libros";
        $result = $conn->query($query);

        // Mostrar resultados
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card mb-3'>";
                echo "<div class='card-body'>";
                echo "<h5 class='card-title'>" . $row['titulo'] . "</h5>";
                echo "<p class='card-text'>" . $row['descripcion'] . "</p>";
                echo "<p class='card-text'>Precio: $" . $row['precio'] . "</p>";
                echo "<a href='#' class='btn btn-primary'>Agregar al Carrito</a>";
                echo "</div>";
                echo "</div>";
            }
        } else {
            echo "No se encontraron libros.";
        }

        // Cerrar conexión a la base de datos
        $conn->close();
        ?>-->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
