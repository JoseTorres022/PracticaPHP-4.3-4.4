<?php
$textos = fopen("../Documentos/mitexto.txt", "w");
fwrite($textos, "Este es un archivo con extension .txt \n");
fwrite($textos, "practica relizada por: Jose Torres \n");
fwrite($textos, "Materia: Programacion WEB \n");
fwrite($textos, "En Cd. Juarez, Chihuahua \n");
fwrite($textos, "-----Fin de los datos-----");

fclose($textos);

echo ("Se le ha escrito los datos correctamente.");

//regresar al usuario un paso atras
$mensaje = 'se creo el archivo';
header('location:../index.php?msg=' . $mensaje);
