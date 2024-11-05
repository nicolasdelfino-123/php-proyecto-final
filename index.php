<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Factura</title>
    <!-- Incluye una hoja de estilo CSS externa para dar formato a la página -->
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Factura</h1>
    <form action="guardar_factura.php" method="post">
        <!-- Etiqueta y campo para el nombre del cliente -->
        <label for="cliente">Cliente:</label>
        <input type="text" name="cliente" id="cliente" required><br>

        <!-- Etiqueta y campo para el nombre del producto -->
        <label for="producto">Producto:</label>
        <input type="text" name="producto" id="producto" required><br>

        <!-- Etiqueta y campo para la cantidad -->
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad" required><br>

        <!-- Etiqueta y campo para el precio -->
        <label for="precio">Precio:</label>
        <input type="number" name="precio" id="precio" required><br>

        <!-- Botón para enviar el formulario y guardar la factura -->
        <input type="submit" value="Guardar Factura">
    </form>

    <h2>Facturas Guardadas</h2>
    <ul>
        <?php
        // Lee el contenido del archivo 'facturas.txt' y lo almacena en la variable $facturas
        $facturas = file('facturas.txt');

        // Itera a través de cada línea del archivo de facturas
        foreach ($facturas as $factura) {
            // Divide la línea en un arreglo utilizando el carácter '|' como separador
            $datos = explode('|', $factura);

            // Imprime los datos de cada factura en una lista
            echo "<li>{$datos[0]} - {$datos[1]} - {$datos[2]} - {$datos[3]}</li>";
        }
        ?>
    </ul>
</body>
</html>

