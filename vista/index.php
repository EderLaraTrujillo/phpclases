<?php
    # Incluimos archivos inc, para el consumo en todos los archivos
    include('cabezera.inc');
    include '../controlador/main.php';      # Halamos la info que contenga ese archivo expuesto
    print("<br>Hello World!!");
?>
<div class="container">
    <form method="post">
        <input type="text" name="entrada" placeholder="Escriba su nombre">
        <!-- <button name="formulario" type="submit" formaction="../controlador/main.php">Enviar</button> -->
        <button name="Saludar" formaction="../controlador/funciones.php" class="btn btn-primary">Saludar</button>
        <button name="Comentar" formaction="../controlador/funciones.php" class="btn btn-success">Comentar</button>
        <button name="Despedir" formaction="../controlador/funciones.php" class="btn btn-info">Despedir</button>
    </form>
    <br>
    <h1>Ejercicios de programación</h1>
    <h3>Ejercicio 1</h3>
    <p>
        Escribir un número y determinar si es par o impar
    </p>
    <form method="post">
        <input type="number" name="numero" placeholder="Escriba un número" >
        <br>
        <button formaction="../controlador/funciones.php" name="ejercicio1">Resolver</button>
    </form>
    <br>
    <h3>Ejercicio 2</h3>
    <p>
        Escribir un número y el programa realiza la tabla de multiplicar de este. [0..9]
    </p>
    <form method="post">
        <input type="number" name="tabla" placeholder="Escriba un número" >
        <br>
        <button formaction="../controlador/funciones.php" name="ejercicio2">Resolver</button>
    </form>
    <br>
    <a href="ejercicios.php" class="btn btn-danger">Ir a los Ejercicios</a>
</div>

