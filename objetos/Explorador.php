<?php
    require_once("Personaje.php");
    class Explorador extends Personaje{
        protected $objDes;
        protected $numNoDes;

        function __construct($nombre, $especie, $objDes, $numNoDes){
            parent::__construct($nombre, $especie);
            $this->objDes = $objDes;
            $this->numNoDes = $numNoDes;
            $puntos = ($objDes * 10) + ($numNoDes * 5);
            parent::calcPuntos($puntos);
        }

        function getObjDes(){
            return $this->objDes;
        }
        function getNumNoDes(){
            return $this->numNoDes;
        }

        function setObjDes($objDes){
            $this->objDes = $objDes;
        }
        function setNumNoDes($numNoDes){
            $this->numNoDes = $numNoDes;
        }

        function __toString(){
            return parent::__toString()." por ser de clase <span class='deco'>".get_called_class()."</span> con <span class='deco'>".$this->objDes."</span> objetivos descubiertos y <span class='deco'>".$this->numNoDes."</span> veces sin ser descubierto.";
        }
    }
?>