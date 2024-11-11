<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Factura</title>
    <!-- Incluye una hoja de estilo CSS externa para dar formato a la página -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital\
,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;\
1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <h1 class="titulo"><em>Huellitas</em></h1>
    <form action="guardar_factura.php" method="post">
        <!-- Etiqueta y campo para el código -->
        <label for="codigo">Código:</label>
        <input type="text" name="codigo" id="codigo" required><br>

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
         <div class="guardar">
        <input type="submit" value="Guardar Factura">
        </div>
    </form>

    <h2><u>Facturas Guardadas</u></h2>
    <ul>
        <?php
        // Lee el contenido del archivo 'facturas.txt' y lo almacena en la variable $facturas
        $facturas = file('facturas.txt');

        // Itera a través de cada línea del archivo de facturas
        foreach ($facturas as $factura) {
            // Divide la línea en un arreglo utilizando el carácter '|' como separador
            $datos = explode('|', $factura);

         // Calcula el total (cantidad * precio)
         $total = $datos[3] * $datos[4];

            // Imprime los datos de cada factura en una lista
            echo "<li><b><u>Código:</u></b> {$datos[0]} - <b><u>Cliente:</u></b> {$datos[1]} - <b><u>Producto:</u></b> {$datos[2]} - <b><u>Cantidad:</u></b> {$datos[3]} - <b><u>Precio unitario:</u></b> {$datos[4]} - <b><u>Total:</u></b> {$total}</li>";
        }
        ?>
    </ul>
</body>
</html>

