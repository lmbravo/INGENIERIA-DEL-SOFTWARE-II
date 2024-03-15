<?php
// Iniciar o reanudar la sesión
session_start();

// Agregar libro al carrito
function agregarAlCarrito($libroId, $cantidad) {
    // Verificar si el libro ya está en el carrito
    if(isset($_SESSION['carrito'][$libroId])) {
        // Si el libro ya está en el carrito, incrementar la cantidad
        $_SESSION['carrito'][$libroId] += $cantidad;
    } else {
        // Si el libro no está en el carrito, agregarlo con la cantidad especificada
        $_SESSION['carrito'][$libroId] = $cantidad;
    }
}

// Eliminar libro del carrito
function eliminarDelCarrito($libroId) {
    // Verificar si el libro está en el carrito
    if(isset($_SESSION['carrito'][$libroId])) {
        // Eliminar el libro del carrito
        unset($_SESSION['carrito'][$libroId]);
    }
}

// Vaciar carrito
function vaciarCarrito() {
    // Vaciar el carrito
    unset($_SESSION['carrito']);
}

// Proceso de compra (simulado)
function procesarCompra() {
    // Aquí iría la lógica real para procesar la compra, como guardar la información en la base de datos, enviar un correo electrónico de confirmación, etc.
    
    // Después de procesar la compra, vaciar el carrito
    vaciarCarrito();
}

// Ejemplo de uso
// Agregar libro al carrito
agregarAlCarrito(1, 2); // Agrega 2 unidades del libro con ID 1 al carrito
agregarAlCarrito(2, 1); // Agrega 1 unidad del libro con ID 2 al carrito

// Eliminar libro del carrito
eliminarDelCarrito(1); // Elimina el libro con ID 1 del carrito

// Vaciar carrito
vaciarCarrito(); // Vacía todo el contenido del carrito

// Procesar compra (simulado)
procesarCompra(); // Simula el proceso de compra, vaciando el carrito después de realizar la compra
?>
