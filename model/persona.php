<?php
class Persona{
    public function __construct(
        private string $nombre,
        protected int $edad
    ){ }
    public function get_nombre():string{
        return $this->nombre;
    }
    public function set_nombre(string $nombre){
        $this->nombre = $nombre;
    }
    public function get_edad():int{
        return $this->edad;
    }
    public function set_edad(int $edad){
        $this->edad = $edad;
    }
    public function saludar():void{
        echo "Hola " . $this->nombre ." como estas";
    }
}