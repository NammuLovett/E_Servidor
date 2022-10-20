<!-- 
- Biblioteca.php: crea un archivo con funciones para sumar, restar, multiplicar y dividir dos números.

- Prueba las funciones


-->
<?php
function sumar()
{

    if (func_num_args() == 0) {
        return false;
    } else {
        $suma = 0;
        for ($i = 0; $i < func_num_args(); $i++) {
            $suma += func_get_arg($i);
        }
        return $suma;
    }
}
/* echo sumar(1, 1, 1, 1, 1, 1, 1, 1, 1, 1); */

function restar()
{

    if (func_num_args() == 0) {
        return false;
    } else {
        $resta = func_get_arg(0);
        for ($i = 1; $i < func_num_args(); $i++) {
            $resta -= func_get_arg($i);
        }
        return $resta;
    }
}
/* echo suma(10, -1, -1, -1, -1, -1); */
function multiplicar()
{

    if (func_num_args() == 0) {
        return false;
    } else {
        $mult = 1;
        for ($i = 0; $i < func_num_args(); $i++) {
            $mult *= func_get_arg($i);
        }
        return $mult;
    }
}

/* echo multip(2, 3, 1, 1); */

function dividir()
{

    if (func_num_args() == 0) {
        return false;
    } else {
        $divis = func_get_arg(0);
        for ($i = 1; $i < func_num_args(); $i++) {
            $divis /= func_get_arg($i);
        }
        return $divis;
    }
}
/* echo division(20, 2, 2, 2); */
