<?php 
    //clase hija
    require 'Principal.php';
    /*
    para poder hacer herencia necesitamos especificar en que parte esta el archivo, para eso usamos el
    require que es la ruta del archivo, como esta en la misma carpeta unicamente sera el nombre y la extension
    */

    class Automovil extends Vehiculo{
        private $can_asientos;
        
         public function setCan_asientos($can_asientos){
            $this-> can_asientos = $can_asientos;
        }

        public function getCan_asientos(){
            return $this->can_asientos;
        }

        public function imprimeVehiculo()
        {
            echo 'El automovil tiene ' .$this->getCan_asientos().' Asientos y Tambien es de color '.$this->getColor(). ' y es de marca '.$this->getModelo();
        }
    }

    $objAutomovil = new Automovil();
    $objAutomovil->setColor('Rojo');
    $objAutomovil->setModelo('Nizan');
    $objAutomovil->setCan_asientos('5');
    $objAutomovil->imprimeVehiculo();
    echo "<br>";
    echo 'Herencia, encapsulamiento y polimorfismo';
?>