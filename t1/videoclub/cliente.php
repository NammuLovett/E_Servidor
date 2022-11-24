<?php

/* Crear la clase Cliente. El constructor recibirá el nombre,numero y maxAlquilerConcurrente, este último pudiendo ser opcional y tomando como valor por defecto 3. 

Tras ello, añade getter/setter  únicamente a numero, y un getter a numSoportesAlquilados (este campo va a almacenar un contador del total de alquileres que ha realizado). El array de soportes alquilados contedrá clases que hereden de Soporte. Finalmente, añade el método muestraResumen que muestre el nombre y la cantidad de alquileres (tamaño de Array soportesAlquilados). */

/* declare(strict_types=1); */

class Cliente
{

    public  $nombre; //publica
    private  $numero; //priv
    private  $numSoportesAlquilados; //priv
    private  $soportesAlquilados = array(); //priv
    private  $maxAlquilerConcurrente; //priv


    public   function __construct(string $nombre, int $numero, array $soportesAlquilados, int $maxAlquilerConcurrente)


}




/* 
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
        echo "<br> " . $this->titulo . " " . $this->precio . " € (IVA no incluido)";
    }
}
 */