<?php
/*
    El contador de visitas más simple
    https://parzibyte.me/blog
*/
$nombreArchivo = "contador.txt";
# Si no existe, lo creamos
if (!file_exists($nombreArchivo)) {
    touch($nombreArchivo);
}
# Obtenemos su contenido
$contenido = trim(file_get_contents($nombreArchivo));
# Si está vacío, lo igualamos a cero
if ($contenido == "") {
    $visitas = 0;
} else {
    # Si no, las visitas son lo que tenga el archivo
    $visitas = intval($contenido);
}
# Ya sea que las visitas son 0 o las que hayamos leído, las aumentamos
$visitas++;
# Y volvemos a escribir el valor en el archivo
file_put_contents($nombreArchivo, $visitas);
