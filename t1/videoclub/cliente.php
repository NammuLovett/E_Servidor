<?php
include_once 'soporte.php';

/* declare(strict_types=1); ver documentación*/

/* cliente 1 */
class Cliente
{
    public string $nombre;
    private int $numero;
    private int $maxAlquilerConcurrente;
    private int $numSoportesAlquilados;
    private array $soportesAlquilados;

    public function __construct(string $nombre, int $numero, int $maxAlquilerConcurrente = 3)
    {
        $this->nombre = $nombre;
        $this->numero = $numero;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
    }

    public function getNumero() //getNumero
    {
        return $this->numero;
    }
    public function setNumero($numero) //setNum
    {
        $this->numero = $numero;
    }
    public function getNumSoportesAlquilados()
    {
        return $this->numSoportesAlquilados;
    }
    public function muestraResumen()
    {
        echo 'Nombre: ' . $this->nombre . '</br>Cantidad de alquileres: ' . count($this->soportesAlquilados) . '<br>';
    }

    /* cliente 2 */

    public function tieneAlquilado(soporte $s): bool
    {
        if (in_array($s, $this->soportesAlquilados)) {
            return true;
        } else {
            return false;
        }
    }


    public function alquilar(Soporte $s): bool
    {
        if ($this->tieneAlquilado($s)) {
            echo 'El soporte lo tienes alquilado.<br>';
            return false;
        } else {
            if ($this->getNumSoportesAlquilados() < $this->maxAlquilerConcurrente) {
                array_push($this->soportesAlquilados, $s);
                $this->numSoportesAlquilados++;
                $s->setAlquilado(true);
                echo 'Soporte alquilado.<br>';
                return true;
            } else {
                echo 'Has alcanzado el máximo de soportes alquilados (' . $this->maxAlquilerConcurrente . ').<br>';
                return false;
            }
        }
    }



    /* cliente 3 */
    function devolver(int $numSoporte): bool
    {
        if ($this->tieneAlquilado($s)) {
            echo "El soporte está alquilado";
            return false;
        }else{
            echo "El soporte está para alquilar, hay".$this;
            return true;
    }
}



/* cliente 3 */
function devolver(int $nummSoporte):bool{
        }
    }


    function  listarAlquileres(): void
    {
    }
}







/* 
class Cliente
{

    public string $nombre;
    private int $numero;
    private static int $totalClientes = 0;
    private array $soportesAlquilados = array();
    private int $numSoportesAlquilados = 0;
    private int $maxAlquilerConcurrente;


    public function __construct(string $nombre, int $maxAlquilerConcurrente = 3)
    {
        $this->nombre = $nombre;
        $this->maxAlquilerConcurrente = $maxAlquilerConcurrente;
        $this->numero = self::$totalClientes;
        self::$totalClientes++;
    }

    public function getNumero()
    {
        return $this->numero;
    }
    public function setNumero(int $numero)
    {
        $this->numero = $numero;
    }

    public function getNumSoportesAlquilados()
    {
        return $this->numSoportesAlquilados;
    }

    public function tieneAlquilado(Soporte $s): bool
    {
        if (in_array($s, $this->soportesAlquilados)) {
            return true;
        } else {
            return false;
        }
    }

    public function alquilar(Soporte $s): bool
    {
        if ($this->tieneAlquilado($s)) {
            echo 'Ya tienes este soporte alquilado.<br>';
            return false;
        } else {
            if ($this->getNumSoportesAlquilados() < $this->maxAlquilerConcurrente) {
                array_push($this->soportesAlquilados, $s);
                $this->numSoportesAlquilados++;
                $s->setAlquilado(true);
                echo 'Soporte alquilado correctamente.<br>';
                return true;
            } else {
                echo 'No se puede alquilar. Número máximo de soportes alcanzado (' . $this->maxAlquilerConcurrente . ').<br>';
                return false;
            }
        }
    }

    public function devolver(int $numSoporte): bool
    {
        if ($this->numSoportesAlquilados == 0) {
            echo 'No tiene ningún soporte alquilado. <br>';
            return false;
        } else {
            for ($i = 0; $i < $this->numSoportesAlquilados - 1; $i++) {
                if ($this->soportesAlquilados[$i]->getNumero() == $numSoporte) {
                    $Soporte = $this->soportesAlquilados[$i];
                    $this->soportesAlquilados[$i] = $this->soportesAlquilados[$i + 1];
                    $this->soportesAlquilados[$i + 1] = $Soporte;
                }
            }

            if ($this->soportesAlquilados[count($this->soportesAlquilados) - 1]->getNumero() == $numSoporte) {
                $this->soportesAlquilados[count($this->soportesAlquilados) - 1]->setAlquilado(false);
                array_pop($this->soportesAlquilados);
                echo 'Soporte devuelto correctamente. <br>';
                $this->numSoportesAlquilados--;
                return true;
            } else {
                echo 'No tiene alquilado un soporte con ese número. <br>';
                return false;
            }
        }
    }

    public function listarAlquileres(): void
    {
        echo '<strong>' . $this->nombre . ' tiene ' . count($this->soportesAlquilados) . ' soportes alquilados: <br></strong>';
        foreach ($this->soportesAlquilados as $Soporte) {
            echo '<br>';
            echo get_class($Soporte) . ':<br>';
            echo $Soporte->muestraResumen();
        }
    }

    public function muestraResumen()
    {
        echo 'Nombre: ' . $this->nombre . '</br>Cantidad de alquileres: ' . count($this->soportesAlquilados) . '<br>';
    }
}
 */