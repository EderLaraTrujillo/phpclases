<?php
    # Incluimos archivos inc, para el consumo en todos los archivos
    include('cabezera.inc');
?>
<section class="container row">
    <h1 class="text-success">Ejercicios de Programación:</h1>
    <br>
    <h3 class="text-info">Ejercicio 3</h3>
    <p class="text-justify">
    Un año es bisiesto si es divisible por 4 y no es por 100, o si es divisible por 400. Escribe un programa que lea un
año y devuelva si es bisiesto o no.
    </p>
    <h3 class="text-info">Ejercicio 4</h3>
    <p class="text-justify">
    Calcular el mayor de dos números enteros introducidos por teclado.
    </p>

    <form class="col-6" action="../controlador/funciones.php" method="post">
        <input class="form-control" type="number" name="year" title="Ingrese el año o un número" require>
        <input class="form-control" type="number" name="cifra" title="Ingrese el año o un número">
        <div class="form-control">
            <label for="ejercicio">Escoja un ejercicio a resolver:</label>
            <select name="ejercicio" id="">
                <option value="0">Escoja una opción</option>
                <option value="3">Ejercicio 3</option>
                <option value="4">Ejercicio 4</option>
            </select>
            <button class="btn btn-primary" name="resolver">Resolver</button>
        </div>
    </form>

    <a href="index.php" class="btn btn-dark">Regresar a inicio</a>
</section>