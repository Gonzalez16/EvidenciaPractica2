<?php
    //clase hija
    require 'Principal.php';
    /*
    para poder hacer herencia necesitamos especificar en que parte esta el archivo, para eso usamos el
    require que es la ruta del archivo, como esta en la misma carpeta unicamente sera el nombre y la extension
    */
    class Moto extends Vehiculo{
        private $vel_max;

        public function setVel_max($_vel_max){
            $this-> vel_max = $_vel_max;
        }
    
        public function getVel_max(){
           return $this->vel_max;
        }

        public function imprimeVehiculo()
        {
            echo 'La moto tiene una velocidad de ' .$this->getVel_max().' Tambien es de color '.$this->getColor(). ' y es de marca '.$this->getModelo();
        }
    
    }

    $objMoto = new Moto();
    $objMoto->setColor('Azul');
    $objMoto->setModelo('Toyota');
    $objMoto->setVel_max('100km/h');
    $objMoto->imprimeVehiculo();
    echo "<br>";
    echo 'Herencia, encapsulamiento y polimorfismo';
?>