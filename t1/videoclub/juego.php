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
        echo " Consola: " . $this->consola . "<br>";
        $this->muestraJugadoresPosibles();
    }

    function muestraJugadoresPosibles()
    {
        /* "Para un jugador", "Para x jugadores" o "De X a Y jugadores" */

        if ($this->minNumJugadores == $this->maxNumJugadores) {
            if ($this->maxNumJugadores == 1) {
                echo "Para un jugador";
            } else {
                echo "Para " . $this->maxNumJugadores . " jugadores";
            }
        } else {
            echo "de " . $this->minNumJugadores . " a "  . $this->maxNumJugadores . " jugadores";
        }
    }
}
