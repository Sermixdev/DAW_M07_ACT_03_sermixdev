<?php
    require_once("Personaje.php");
    class Guerrero extends Personaje{
        protected $eneAba;
        protected $danSuf;


        function __construct($nombre, $especie, $eneAba, $danSuf){
            parent::__construct($nombre, $especie);
            $this->eneAba = $eneAba;
            $this->danSuf = $danSuf;
            $puntos = ($eneAba * 10) + ($danSuf * 5);
            parent::calcPuntos($puntos);
        }

        function getEneAba(){
            return $this->EneAba;
        }
        function getDanSuf(){
            return $this->DanSuf;
        }

        function setEneAba($EneAba){
            $this->EneAba = $EneAba;
        }
        function setDanSuf($DanSuf){
            $this->DanSuf = $DanSuf;
        }

        function __toString(){
            return parent::__toString()." por ser de clase <span class='deco'>".get_called_class()."</span> con <span class='deco'>".$this->eneAba."</span> enemigos abatidos y <span class='deco'>".$this->danSuf."</span> de daño sufrido.</div>";
        }
    }
?>