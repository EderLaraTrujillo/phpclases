<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<?php
    # error_reporting(0); // Se utiliza para omitir las advertencias que se pueden presentar

    # Qué es una clase? 
        # - Una clase es una plantilla que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.
    # Qué es un Objeto?
        # - Es una entidad provista de métodos o mensajes a los cuales responde (comportamiento); atributos con valores concretos (estado); y propiedades (identidad).
    # Qué es un método?
        # - Es el algoritmo asociado a un objeto que indica la capacidad de lo que éste puede hacer.

    /* Estructura de la clase:

    clase{
        atributos:
        public $atributo;
        static $atributo;
        private $atributo;

        funciones:
        public function(){
            return ...
        }
    }
    objetos:
    objeto = new clase();
    */ 

    # Creación de Clases:
    class MiClase {
        // Las clases pueden tener varios tipos de atributos:
        public $variablepublicaone;     // Variables que son accesibles desde fuera de la clase
        public $variablepublicatwo;
        private $variableprivada = 'Variable Privada';       // Variables que solo se acceden dentro de la clase
        public static $variablestatica = 'Variable Static No necesita objeto'; // Variable de fácil acceso desde fuera de la clase;
        # Constantes:
        const CONSTANTE_PHP = 3.1416;   // Constantes en php

        // Acceder a las variables dentro de la clase:
        //$this->$variablestatica = 'Valor de variable statica';

        # Métodos de la clase:
        public function miMetodo(){
            $retorno = 'Esto es un mensaje desde el método';
            return $retorno;
        }
        # Método con parámetros:
        public function parametros($nombre, $fecha){
            $mensaje = 'Tenemos un objeto '.$nombre.'<br>Asignado el día: '.$fecha;
            return $mensaje;
        }
        # Método accediendo a variables privadas:
        public function privateAcces(){
            return $this -> variableprivada;
        }
    }
    # Creación de Objetos:
    $objeto = new MiClase;
    # Asignación de valores al objeto:
    $objeto -> variablepublicaone = "Objeto con variable 'public'";
    $objeto -> variablepublicatwo = "Objeto con variable 'public también";

    # Impresión de objetos:
    print '<h3>Programación Orientada a Objetos en PHP:</h3>';
    print $objeto -> variablepublicaone . "<br>";
    print $objeto -> variablepublicatwo;

    # Uso de métodos
    print '<h4>Accediendo al método de la clase:</h4>';
    print $objeto -> miMetodo();
    print '<h4>Objetos operados desde los métodos con parametros:</h4>';
    print $objeto -> parametros('Sillas Rimax', '2021-08-13');

    # Accediendo a constantes y variables staticas:
    print '<h4>Accediendo a variables static y a const</h4>';
    print 'Variable estatica: '.MiClase:: $variablestatica. '<br>';
    print 'Constante: '. MiClase::CONSTANTE_PHP.'<br>';

    # Accediendo a los atributos privados desde funciones:
    print '<h4>Accediendo a variables private desde un método</h4>';
    print $objeto ->privateAcces();

    # Constructores y destructores:
        # Un constructor es un método para asignar valores iniciales a los objetos
        # un destructor se encarga de destruir ese objeto:

    class MiClase2{
        # Constructor:
        public function __construct($variablepublicaone, $variablepublicatwo){
            # Asociamos nombres a los parámetros obtenidos en el objeto:
            $this -> one = $variablepublicaone;
            $this -> two = $variablepublicatwo;
            # Podemos tener otras variables sin necesidad de que sean un parámetro:
            $this -> three = 'Eder Lara Class';
        }
        # Usando los atributos con mis funciones:
        public function metodone(){
            $datos = $this->one." ".$this->two." ".$this-> three;
            return $datos;
        }
        # Destructor:
        public function __destruct(){
            echo '<br>';
            echo "Esto es un destructor, sus finalidades van desde: Terminar sesiones, cambiar de páginas, cerrar la base de datos, etc.";
        }
    }
    # Instancia de objeto:
    $objeto2 = new MiClase2('Hola Mundo', 'Eder Lara T');
    # Impresion:
    print '<h4>Objeto 2 desde una clase con método construtor y destructor</h4>';
    print $objeto2 -> metodone();

    # Herencia en PHP:

    class Hija extends MiClase2{
        
    }

    # Ejemplo de phpdocs:
    /*
    # Como se instancia una clase:
    class A {
        # Funcion que me retorna objetos de la clase:
        function foo(){                         // La función es vacia, es decir retorna cualquier cosa:
            // Si existe:
            if(isset($this)){
                print 'Este objeto $this esta definido (';
                print get_class($this);
                print ")<br>";
            }else {
                print '$this no esta definida';
            }
        }
    }
    # Heredamos de la clase A sus elementos:
    class B {
        public static function men(){
            A::foo();
            print '<br>';
        }
    }

    # Creamos los objetos:
    $a = new A();
    $a -> foo();
    # Impresiones de estos objetos:
    A::foo();
    $b = new A();
    $b -> foo();
    $b -> men();
    */
?>