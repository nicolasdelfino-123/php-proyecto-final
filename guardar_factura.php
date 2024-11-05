<?php
// Verifica si la solicitud HTTP es de tipo POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recopila los datos enviados desde el formulario y los almacena en variables
    $cliente = $_POST['cliente'];       // Nombre del cliente
    $producto = $_POST['producto'];     // Nombre del producto
    $cantidad = $_POST['cantidad'];     // Cantidad del producto
    $precio = $_POST['precio'];         // Precio del producto

    // Forma una línea de texto que contiene los datos separados por '|' y un salto de línea al final
    $linea = "$cliente|$producto|$cantidad|$precio\n";

    // Agrega la línea al archivo 'facturas.txt' sin sobrescribir el contenido existente
    file_put_contents('facturas.txt', $linea, FILE_APPEND);
}

// Redirige de vuelta al formulario principal (index.php)
header('Location: index.php');
?>
