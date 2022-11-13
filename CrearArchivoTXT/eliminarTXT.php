<?php 
//variable para eliminar el fichero
$elminarTXT='../CrearArchivoTXT/mitexto.txt';

//elimianr el fichero
unlink($elminarTXT);

//regresar al usuario un paso atras
// $mensaje='se elimino el archivo';
// header('location:../index.php?mensaje='.$mensaje);
?>