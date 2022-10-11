<!-- Crea las siguientes funciones:


Crea una función que concatene todos los parámetros recibidos separándolos con un espacio: function concatenar(...$palabras) : string. Utiliza el operador ....

digitos(int $num): int → devuelve la cantidad de dígitos de un número.
digitoN(int $num, int $pos): int → devuelve el dígito que ocupa, empezando por la izquierda, la posición $pos.
quitaPorDetras(int $num, int $cant): int → le quita por detrás (derecha) $cant dígitos.
quitaPorDelante(int $num, int $cant): int → le quita por delante (izquierda) $cant dígitos.

-->
<?php

function comprobarNumPar(int $num)
{
    if ($num % 2 == 0) {
        echo "Es Par";
    } else {
        echo "Es Impar";
    }
}
/* comprobarNumPar(42); */
/* Una función que devuelva un array de tamaño $tam con números aleatorios comprendido entre $min y $max : arrayAleatorio(int $tam, int $min, int $max) : array */

function arrayAleatorio(int $tam, int $min, int $max)
{
    if ($tam > ($max - $min)) {
        for ($i = 0; $i < $tam; $i++) {
            $randomNumber[$i] = rand($min, $max);
        }
        return $randomNumber;
    } else {
        for ($i = 0; $i < $tam; $i++) {
            $randomNumber[$i] = rand($min, $max);

            for ($j = 0; $j < $i; $j++) {
                while ($randomNumber[$i] == $randomNumber[$j]) {
                    $num[$j] = rand($min, $max);
                    $j = 0;
                }
            }
        }
        return $randomNumber;
    }
}

/* var_dump(arrayAleatorio(10, 1, 99)) */

/* Una función que reciba un $array por referencia y devuelva la cantidad de números pares que hay almacenados: arrayPares(array &$array): int  */


function ArrayPares(&$arrPares)
{
    if (func_num_args() == 0) {
        return false;
    } else {
        $pares = 0;

        for ($i = 0; $i < count($arrPares); $i++) {
            if ($arrPares[$i] % 2 == 0) {
                $pares++;
            }
        }
    }
    echo "Hay $pares números pares";
}
$arrPrueba = [2, 3, 5, 6, 90, 3, 90, 325, 120, 32153];
ArrayPares($arrPrueba);

/* Crea una función que devuelva el mayor de todos los números recibidos como parámetros: function mayor(): int. Utiliza las funciones func_get_args(), etc... No puedes usar la función max(). */


?>