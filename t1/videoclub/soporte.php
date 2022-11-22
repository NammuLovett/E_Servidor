<!-- Crea una clase para almacenar soportes ( Soporte.php ). Esta
clase será la clase padre de los diferentes soportes con los que
trabaje nuestro videoclub (cintas de vídeo, videojuegos, etc...):

    Crea el constructor que inicialice sus propiedades. Fíjate que
    la clase no tiene métodos setters.
    Definir una constante mediante un propiedad privada y
    estática denominada `IVA con un valor del 21% 
    Crear un archivo ( inicio.php ) para usar las clases y copia el fragmento adjunto. -->
<?php

// propiedades 
// constructor 
// getters - setters 
// resto de métodos 

class Soporte
{
    //propiedades
    public $titulo; //pública + 
    protected $numero; //protected #
    private $precio; //privada - 
    private const IVA = 1.21;

    public function __construct(string $titulo, int $numero, float $precio)
    {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }
    //métodos 
    public function getPrecio()
    {
        return $this->precio;
    }

    public function getPrecioConIva()
    {
        return $this->getPrecio() * self::IVA;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function muestraResumen()
    {
        echo $this->titulo . " " . $this->precio . " € (IVA no incluido)";
    }
}
