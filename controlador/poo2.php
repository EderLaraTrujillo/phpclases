<?php
    # ¿Qué es Herencia?
    #   - Son todos los comportamientos y atributos que mantienen los hijos que son propios de los padres.
    # ¿Qué Encapsulamiento?
    #   - Es una medida de protección de datos.
    # ¿Qué es Abstracción?
    #   - Es modelar un objeto de acuerdo a las reglas del negocio.
    # ¿Qué es Polimorfismo?
    #   - Es el comportamiento del objeto de acuerdo a la situación.
    print '<h3>Herencia en Php</h3>'; 
    print '<p>Son todos los comportamientos y atributos que mantienen clases que dependen de otras clases</p>';

    # Tienda donde se exiben autos:
    class Auto {
        const SALTO = '<br>';   # Constante
        protected $precio;      # Encapsulamos el atributo precio;

        # Constructor: 
        public function __construct($marca, $modelo, $color){
            $this -> marca = $marca;
            $this -> modelo = $modelo;
            $this -> color = $color;
        }

        public function setPrecio($costo){
            $this -> precio = $costo;
        }

        public function getAuto(){
            $ob_auto = $this -> marca.' '. $this -> modelo.' '.$this -> color.' '. number_format($this -> precio).Auto::SALTO;
            return $ob_auto;
        }
    }

    # Impresiones:
    # Primero creamos el objeto:
    $mercedes = new Auto("Mercedez Benz", "2021", "Negro");
    $mercedes -> setPrecio(300000000);
    # Accedemos a los atributos:
    print $mercedes -> getAuto();

    # Herencia entre clases:
    class Mercedez extends Auto{
        # Acceder al constructor de la clase madre:
        // parent::__construct($estado){
        //     $this-> estado = 'En expocisión';
        // }
        protected $estado;

        protected function proteccion($param){
            return $param;
        }
        
        public function setEstado($status){
            $retorno = $this -> estado = $status;
            $retorno -> proteccion($retorno);
            return $retorno;
        }
    }

    # Creamos un objeto en la clase hija:
    $obj_mercedez = new Mercedez("BMW", '2020', "Blanco");
    $obj_mercedez -> setPrecio(80000000);
    print $obj_mercedez -> getAuto();

?>

<!-- print '<h3></h3>';  -->