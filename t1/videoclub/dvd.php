<?php

class Dvd extends soporte
{
    public $idiomas; //pública +
    private $formatPantalla; //privada -


    public function __construct(string $titulo, int $numero, float $precio, string $idiomas, string $formatPantalla)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->idiomas = $idiomas;
        $this->formatPantalla = $formatPantalla;
    }

    function muestraResumen()
    {
        parent::muestraResumen();
        echo " " . $this->idiomas . " son idiomas";
        echo " " . $this->formatPantalla . " formatos";
    }
}
