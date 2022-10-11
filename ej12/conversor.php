<!-- 
euros.php: 

Crea una biblioteca con dos funciones:
 - peseta2euros: pasa de pesetas a euros
 - euros2pesetas: pasa de euros a pesetas

 Cada función debe recibir dos parámetros:
- La cantidad a transformar
- La cotización, con un parámetro por defecto con el factor de transformación. 

calculadoraEuros.php: utiliza 243euros.php y prueba las funciones pasando tanto cantidades con la cotización por defecto, como con nuevas cotizaciones. Recuerda que 1 euro son/eran 166.36 pesetas. -->

<?php
function pesetaEuro($valor, $cambio = 166.36)
{
    $resultado = $valor / $cambio;
    return $resultado;
}
/* echo pesetaEuro(1000); */
function euroPeseta($valor, $cambio = 166.36)
{
    $resultado = $valor * $cambio;
    return $resultado;
}
echo euroPeseta(600);
?>