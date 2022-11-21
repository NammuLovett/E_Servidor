<!-- Crea una clase para almacenar soportes ( Soporte.php ). Esta
clase será la clase padre de los diferentes soportes con los que
trabaje nuestro videoclub (cintas de vídeo, videojuegos, etc...):

    Crea el constructor que inicialice sus propiedades. Fíjate que
    la clase no tiene métodos setters.
    Definir una constante mediante un propiedad privada y
    estática denominada `IVA con un valor del 21% 
    Crear un archivo ( inicio.php ) para usar las clases y copia el fragmento adjunto. -->
<?php


class Soportes
{
    //propiedades
    public string $titulo; //pública + 
    protected int $numero; //protected #
    private float $IVA;
    private int $precio; //privada - 


    //métodos 
    public function getPrecio()
    {
    }

    public function getPrecioConIva()
    {
    }

    public function getNumero()
    {
    }

    public function muestraResumen()
    {
    }
}

?>