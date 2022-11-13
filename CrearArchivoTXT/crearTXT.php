<?php 
//varialbe para la direccione en donde se guarda el fichero:
// $nombreTXT='../ArchivoTXT/mitexto.txt';
//abrir el fichero
// fopen($nombreTXT,'w');
// fputs($nombreTXT,"Escribiendo datos por mi :3 \n");
// fclose($nombreTXT);

$textos=fopen("../CrearArchivoTXT/mitexto.txt","w");
fwrite($textos,"Textos creados por mi :3 \n");
fwrite($textos,"Jose Torres");
fclose($textos);

echo("Se le ha escrito los datos correctamente.");

// fclose($textos);
//regresar al usuario un paso atras
// $mensaje='se creo el archivo';
// header('location:../index.php?mensaje='.$mensaje);
?>
