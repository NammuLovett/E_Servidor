<?php

class Juego extends soporte
{
    public $consola; //pública +
    private $minNumJugadores; //privada -
    private $maxNumJugadores; //privada -


    public function __construct(string $titulo, int $numero, float $precio, string $consola, int $minNumJugadores, int $maxNumJugadores)
    {
        parent::__construct($titulo, $numero, $precio);
        $this->consola = $consola;
        $this->minNumJugadores = $minNumJugadores;
        $this->maxNumJugadores = $maxNumJugadores;
    }

    function muestraResumen()
    {
        parent::muestraResumen();
        echo " Consola: " . $this->consola;
    }

    function muestraJugadoresPosibles()
    {
        echo " minPlayers: " . $this->idiomas;
        echo " maxPlayer: " . $this->formatPantalla;
    }
}
