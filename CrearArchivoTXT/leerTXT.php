<?php
//Abrimos el archivo de texto
$textos = fopen("../Documentos/mitexto.txt", "r");

//Leemos con un bucle, para recorrer todas la lineas de texto
while (!feof($textos)) {
    //leyendo una linea
    $linea = fgets($textos);
    //imprimimos las lineas
    //con bl2br, damos saltos de lineas
    echo nl2br($linea);
}
fclose($textos);
// echo '</br><a href="../index.php"></a>';
