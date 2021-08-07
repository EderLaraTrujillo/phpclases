<?php
    /**
     * solución a ejercicios de programación php
     * Autor : @EderLara
     * Año : 2021
     * Modificado : 2022
     * Por : Andrés Gómez
     */
    $nombre = "Eder Lara Trujillo";     # Variable de texto
    $edad = 38;                         # Variable Númerica
    $sexo = "Masculino";                # Variable de texto
    
    print $nombre." ".$sexo." ".$edad; 

    # Función que recibe parametro por teclado:
    
    if (isset($_POST["formulario"])){
        $problema = $_POST["entrada"];
        $param1 =  $_POST["param1"];
        if($problema < 9){
            $var -> Problema9();
            echo($var);
        }
        include('funciones.php');
    }

?>