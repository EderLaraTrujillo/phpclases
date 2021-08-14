<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<title>Programación POO en PHP</title>
<?php
    # Qué es una clase:
        # - Una clase es una plantilla que se utiliza para crear objetos que comparten un mismo comportamiento, estado e identidad.
    # Qué es un objeto:
        # - Es una entidad provista de métodos o mensajes a los cuales responde (comportamiento); atributos con valores concretos (estado); y propiedades (identidad).  
    # Qué es un método:
        # - Es el algoritmo asociado a un objeto que indica la capacidad de lo que éste puede hacer.
    # Tipos de escritura en php:
        # Kebab-Case = mi_variable;     # Para Escribir Variables
        # CamelCase = miVariable;       # Para Escribir Funciones
        # PascalCase = MiVariable;      # Para Escribir Clases
    
    # Constructores y destructores:
        # Un constructor es un método para asignar valores iniciales a los objetos
        # un destructor se encarga de destruir ese objeto:
    
    /*
    Estructura de una clase en php:
    clase MiClase {         // Las clases se escriben en singular
        # Pueden ir los atributos:
        atributos publicos
        atributos privados
        atributos estaticos
        constantes

        funcion contructor(parametros){
            --Asigna valores
        }

        funcion miFuncion(){
            retornar un solo valor u objeto
        }
        
        # opcional:
        funcion destructor(parametros){
            --Destruye valores o objetos
        }
    }

    Objeto:
    // Objeto en clases sin constructor:
    $objeto = new MiClase;
    // Objeto en clases con constructor
    */

    # Practica Real:
    class MiClase{
        # Atributos públicos:
        public $atributouno;    # Variable publica
        public $atributodos;    # Otra variable publica
        const SALTO = '<br>';   # Constante
        # Atributos Estaticos:
        public static $atributost = 'Atributo STATIC';
        # Atributos privados:
        private $atributoprivado = 'Este es un valor privado';

        # Funciones:
        public function miFuncion(){
            $mensaje = 'Este es el retorno de la función';
            return $mensaje;
        }
        public function miFuncion2(){
            echo 'Este es la impresión desde la función';
        }
        # Funcion para acceder al atributo privado:
        public function privateAcces(){
            return $this -> atributoprivado;
        }
    }

    # Instanciamos o creamos el objeto:
    $objeto = new MiClase;
    # Asignamos valores al objeto:
    $objeto -> atributouno = "Este es el valor del atributo uno";
    $objeto -> atributodos = "Este es el valor del atributo dos";

    # Impresión en pantalla:
    print '<h3>Programación Orientada a Objetos en PHP:</h3>';
    print '<h4>Accediendo al objeto instanciado de la clase:</h4>';
    print '<h5>Valores del objeto:</h5>';
    print $objeto -> atributouno;
    # Imprensión de una constante desde la clase:
    print MiClase::SALTO;     # Es lo mismo que escribir: print '<br>';
    # Impresión de un atributo publico:
    # print $objeto -> SALTO;  -> Imprime error de $SALTO
    print $objeto -> atributodos;

    print MiClase::SALTO;
    # Impresión de atributo static:
    print MiClase::$atributost;

    # Acceder a un método de la clase:
    print '<h4>Accediendo a los métodos de la clase:</h4>';
    print $objeto -> miFuncion();   # Imprime el retorno de la función
    print MiClase::SALTO;           # Imprimo constante
    $objeto -> miFuncion2();        # Imprimo lo que trae función

    # Accediendo a los atributos privados de la clase 
    print '<h5>Accediendo a los atributos privados de la clase:</h5>';
    print $objeto -> privateAcces();
    print MiClase::SALTO; 
    # POO con un enfoque mucho más organizado:
    class MiClase2 {
        # Constantes y privadas:
        const SALTO = '<br>';   # Constante
        private $attrprivada = 'Atributo Privado';
        # Funcion constructor:
        public function __construct($attruno, $attrdos){
            $this -> uno = $attruno;
            $this -> dos = number_format($attrdos);
            # Podemos agregar mas valores al objeto:
            $this -> tres = 'Fecha fin = 30-Nov';
        }
        # Funcion para acceder al objeto:
        public function miMetodo(){
            $datos = $this->uno." ".$this->dos." ".$this-> tres.MiClase2::SALTO."Hubo Salto";
            return $datos;
        }
        # Destructor:
        public function __destruct(){
            print MiClase2::SALTO;
            echo "Este es el destructor de la clase";
        }
    }

    # Ejemplo:
    /*
    clase papá{
        constructor(atrr, attr){

        }
    }
    clase hija extend papá{
        destructor(atrr, attr){
            Acciones del destructor
        }
    }

    */ 
    # Objetos: number_format();
    $Contrato = new MiClase2("Ingeniero de datos", 2000000);
    # Impresiones
    print '<h4>Constructores en clase:</h4>';
    print $Contrato -> miMetodo();

    # Métodos propíos de php:
    // isset();
    // is_a();
    // error_reporting(0); # Omite las advertencias en la pag web
    // session_start();
    //     $_SESSION['VAR'];
    // $mysqli

?>