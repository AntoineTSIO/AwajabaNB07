<?php

    class Repas {

        private $numero ;
        private $date ;


        public function __construct($numero,$date){
            
            $this->numero = $numero ;
            $this->date = $date ;

        }

        public function getNumero(){
            return $this->numero ;
        }

        public function setNumero($numero){
            $this->numero = $numero ;
        }

    }

?>