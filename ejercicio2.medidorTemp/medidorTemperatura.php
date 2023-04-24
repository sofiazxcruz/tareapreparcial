<?php
    class Medidor{
        #creo atributos
        public $centigrados;

        #creo el constructor
        public function __construct($centigrados){
            $this -> centigrados = $centigrados;
        }

        #creo el metodo
        function medir(){
            if($this -> centigrados <= 0){
                echo "temperatura máximamente FRIA!(⁠･⁠ω⁠･⁠)⁠つ⁠⊂⁠(⁠･⁠ω⁠･⁠)";
            }
            else if($this -> centigrados <= 30){
                echo "temperatura estable (⁠◕⁠ᴗ⁠◕⁠✿⁠)";
            }
            else if($this -> centigrados >= 31){
                echo "temperatura máximamente CALIENTE!(⁠⊃⁠｡⁠•́⁠‿⁠•̀⁠｡⁠)⁠⊃";
            }   
        }
    }

    $conversion = new Medidor($_POST['centigrados']);
    $conversion->medir();
?>