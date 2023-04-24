<?php
    class Conversor{
        #lOS ATRIBUTOS
        public $centigrados;
        public $fahrenheit;

        #CREA EL CONSTRUCTOR 
        public function __construct($centigrados,$fahrenheit){
            $this -> centigrados = $centigrados;
            $this -> fahrenheit = $centigrados * 9/5 + 32;
        }

        #Y EL METODO
        function conversion(){
            echo "Cuando se convierte {$this -> centigrados}° centigrados a Fahrenheit el resultado es de {$this -> fahrenheit} fahrenheits";
        }
    }

    $conversion = new Conversor($_POST['centigrados'], 0);
    $conversion -> conversion();
?>