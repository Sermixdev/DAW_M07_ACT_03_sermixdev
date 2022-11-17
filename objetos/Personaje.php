<?php
    class Personaje{
        protected $nombre;
        protected $especie;
        private $experiencia;

        function __construct($nombre, $especie){
            $this -> nombre = $nombre;
            $this -> especie = $especie;
        }

        function getNombre(){
            return $this -> nombre;
        }
        function getEspecie(){
            return $this -> especie;
        }

        function setNombre($nombre){
            $this->nombre = $nombre;
        }
        function setEspecie($especie){
            $this->especie = $especie;
        }
        
        function calcPuntos($puntos){
            $this->experiencia = $puntos;
        }

        function __toString(){
            return "<div>El personaje se llama <span class='deco'>".$this->nombre."</span>, pertenece a la especie <span class='deco'>"
            .$this->especie."</span> y ha obtenido <span class='deco'>".$this->experiencia."</span> puntos de experiencia";
        }
    }
?>