<?php
error_reporting(0); // Se utiliza para omitir las advertencias que se pueden presentar
    # Como se instancia una clase:
    // class Auto {
    //     # Atributos de la clase
    //     public $marca = "Audi";
    //     public $color = "Negro";
    // }
    // $new_auto = new Auto();

    // $new_auto->$marca;
    // $new_auto->color;  
    // print $new_auto;
    # Acceder a un objeto de la clase a:
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

?>