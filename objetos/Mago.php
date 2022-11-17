<?php
    require_once("Personaje.php");
    class Mago extends Personaje{
        protected $secDes;
        protected $hecLan;

        function __construct($nombre, $especie, $secDes, $hecLan){
            parent::__construct($nombre, $especie);
            $this->secDes = $secDes;
            $this->hecLan = $hecLan;
            $puntos = ($secDes * 5) + ($hecLan * 10);
            parent::calcPuntos($puntos);
        }

        function getSecDes(){
            return $this->secDes;
        }
        function getHecLan(){
            return $this->hecLan;
        }

        function setSecDes($secDes){
            $this->secDes = $secDes;
        }
        function setHecLan($hecLan){
            $this->hecLan = $hecLan;
        }

        function __toString(){
            return parent::__toString()." por ser de clase <span class='deco'>".get_called_class()."</span> con <span class='deco'>".$this->secDes."</span> secretos descubiertos y <span class='deco'>".$this->hecLan."</span> hechizos lanzados.</div>";
        }
    }
?>