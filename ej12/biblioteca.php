<!-- 
- Biblioteca.php: crea un archivo con funciones para sumar, restar, multiplicar y dividir dos números.

- Prueba las funciones


-->
<?php
function suma()
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
/* echo suma(1, 1, 1, 1, 1, 1, 1, 1, 1, 1); */

function resta()
{

    if (func_num_args() == 0) {
        return false;
    } else {
        $suma = 0;
        for ($i = 0; $i < func_num_args(); $i++) {
            $suma -= func_get_arg($i);
        }
        return $suma;
    }
}
/* echo suma(10, -1, -1, -1, -1, -1); */
function multip()
{

    if (func_num_args() == 0) {
        return false;
    } else {
        $suma = 1;
        for ($i = 0; $i < func_num_args(); $i++) {
            $suma *= func_get_arg($i);
        }
        return $suma;
    }
}

/* echo multip(2, 3, 1, 1); */

function division()
{

    if (func_num_args() == 0) {
        return false;
    } else {
        $suma = func_get_arg(0);
        for ($i = 1; $i < func_num_args(); $i++) {
            $suma /= func_get_arg($i);
        }
        return $suma;
    }
}
/* echo division(20, 2, 2, 2); */

?>