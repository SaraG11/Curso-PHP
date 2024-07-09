<?php

interface Ordenador{
    public function encender();

    public function apagar();

    public function reiniciar();

    public function desfragmentar();

    public function detectarUSB();
}

class iMac implements Ordenador{
    public $modelo;

    function getModelo(){
        return $this->modelo;

    }
    function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function encender()
    {
        echo "Encendido";
    }
    public function apagar()
    {
        
    }
    public function reiniciar()
    {
        
    }
    public function desfragmentar()
    {
        
    }
    public function detectarUSB()
    {
        
    }
}

$maquintos = new iMac();
$maquintos->setModelo('Macbook pro 2024');
echo $maquintos->getModelo();
// var_dump($maquintos);