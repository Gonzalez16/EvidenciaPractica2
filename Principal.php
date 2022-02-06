<?php
//clase padre 
class Vehiculo{
    protected $color;
    private $modelo;

    public function _construct($_color,$_modelo){
        $this->color = $_color;
        $this-> modelo = $_modelo;
    }

    public function setColor($_color){
        $this->color = $_color;
    }

    public function getColor(){
        return $this->color;
    }

    public function setModelo($_modelo){
        $this-> modelo = $_modelo;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function imprimeVehiculo(){
        echo 'El vehiculo tiene un modelo: ' .$this->getModelo(). ' Con un color ' .$this->getColor();
    }

}

    
?>