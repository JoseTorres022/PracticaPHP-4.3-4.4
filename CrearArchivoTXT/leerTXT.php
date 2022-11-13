<?php
$textos = fopen("../Documentos/mitexto.txt", "r");

//leer el textos con un buble
while (!feof($textos)) {
    $linea = fgets($textos);
    echo $linea . "<br/";
}
fclose($textos);
// echo '</br><a href="../index.php"></a>';
