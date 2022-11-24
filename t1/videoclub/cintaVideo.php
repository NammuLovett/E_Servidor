<?php

class CintaVideo extends soporte
{
    private $duracion; //private - 


    public function __construct(string $titulo, int $numero, float $precio, int $duracion)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->duracion = $duracion;
    }

    function mostrarResumen()
    {
        parent::muestraResumen();
        echo " " . $this->duracion . " minutos de duración";
    }
}
