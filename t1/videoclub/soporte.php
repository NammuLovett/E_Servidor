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

class Soportes
{
    //propiedades
    public string $titulo; //pública + 
    protected int $numero; //protected #
    private float $precio; //privada - 
    private const IVA = 0.79;

    public function __construct(string $titulo, int $numero, float $precio)
    {
        $this->titulo = $titulo;
        $this->numero = $numero;
        $this->precio = $precio;
    }
    //métodos 
    public function getPrecio()
    {
        return "El precio es " . $this->getPrecio() . " euros";
    }

    public function getPrecioConIva()
    {
        return $this->getPrecio() * self::IVA . " euros";
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function muestraResumen()
    {
        echo $this->titulo . "</br>" . $this->precio . " € (IVA no incluido)";
    }
}
