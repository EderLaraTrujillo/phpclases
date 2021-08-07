<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<?php
  # Condicionar cada boton:
  # Boton saludar:
  if(isset($_POST['Saludar'])){
    # Capturamos los datos de la entrada:  
    $usuario = $_POST['entrada'];       # Este dato lo provee el usuario desde la entrada
    print "Hola ".$usuario;
  }
  # Boton Comentar:
  if(isset($_POST['Comentar'])){
    # Capturamos los datos de la entrada:  
    $usuario = $_POST['entrada'];       # Este dato lo provee el usuario desde la entrada
    print "Me gusta tu camisa ".$usuario." Deberiamos vernos!.";
  }
  # Boton Despedir:
  if(isset($_POST['Despedir'])){
    # Capturamos los datos de la entrada:  
    $usuario = $_POST['entrada'];       # Este dato lo provee el usuario desde la entrada
    print "Me ha gustado verte ".$usuario.". Veamonos otra vez!";
  }

  # Solución a los problemas de programación:
  ## Ejercicio 1
  if (isset($_POST['ejercicio1'])):
    # Capturamos los datos del formulario:
    $numero = $_POST['numero']; 
    $divisor = 2;
    if ($numero % $divisor == 0){
      # Si el residuo de $numero entre $divisor es "0";
      print "El número ".$numero." es Par";
    }else {
      # De lo contrario:
      print "El número ".$numero." es Impar";
    } 
  endif;
  ## Ejercicio 2
  if (isset($_POST['ejercicio2'])):
    # Capturamos los datos del formulario:
    $numero = $_POST['tabla']; 
    $fin = 9;
    $index = 0;
    $resultado = 0;
    while($index <= $fin){
      $resultado = $numero * $index;
      print $numero. " x ".$index." = ".$resultado."<br>";
      $index++;
    }
  endif;

  # Resolución de problemas con switch case
  if (isset($_POST['resolver'])):
    $variable = $_POST['ejercicio'];
    switch ($variable) {
      case '3':
        # Resolver el problema del año:
        $year = $_POST['year'];
        if ($year % 4 == 0 and ($year % 100 == 0 || $year % 400 == 0)) {
          # code...
          print "El año ".$year." es Bisiesto";
        } else {
          # code...
          print "El año ".$year." No es Bisiesto";
        }
        
        print("<br>Hola ejercicio 3");
        break;
      case '4':
        # Resuelve mayor entre dos:
        $year = $_POST['year'];
        $cifra = $_POST['cifra'];
        if($year > $cifra){
          print "el mayor es ".$year;
        }else {
          print "el mayor es ".$cifra;
        }
        
        break;
      default:
        # Por defecto:
        print("Escoja un ejercicio para resolver");
        break;
    }
  endif;
?>
<br>
<a href="../vista/index.php">Volver al inicio</a>
<br>
<a href="../vista/ejercicios.php">Ir a los ejercicios</a>