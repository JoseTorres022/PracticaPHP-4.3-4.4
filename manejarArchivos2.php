<?php 
session_start();

$mensaje = '';
if (isset($_POST['BtnCargar'])) {
    if (isset($_FILES['BtnBuscar'])) {
        //obtenermos los detalles del archivo
        $direccionArchivo = $_FILES['BtnBuscar']['tmp_name'];
        $nombreArchivo = $_FILES['BtnBuscar']['name'];
        $pesoArchivo = $_FILES['BtnBuscar']['size'];
        $tipoArchivo = $_FILES['BtnBuscar']['type'];
        $nombreCampos = explode(".", $nombreArchivo);
        $extensionArchivo = strtolower(end($nombreCampos));

        //limpiar nombre del archuvo
        $nuevoNombreArchivo = md5(time() . $nombreArchivo) . '.' . $extensionArchivo;

        //checar archivos epecificos
        $archivosPermitidos = array('pdf', 'docx', 'xlsx');

        if (in_array($extensionArchivo, $archivosPermitidos)) {
            //mover dichos archuvos a un direccion especifica
            $archivoCargado = '../PracticaPHP 4.3-4.4/archivos/';
            $directorioDestino = $archivoCargado . $nuevoNombreArchivo;

            if (move_uploaded_file($direccionArchivo, $directorioDestino)) {
                $mensaje = 'Archivo cargado correctamente.';
            } else {
                $mensaje = 'Uppps..., ocurrio un error al cargar/mover el archivo al directiorio de destino,';
            }
        } else {
            $mensaje = 'Falla en la carga del archivo. Extenciones permitidas: ' . implode(',', $archivosPermitidos);
        }
    } else {
        $mensaje = 'Ha ocurrido un error cuando se cargaba el archivo';
        $mensaje = 'Por favor, checa el siguiente error.';
        $mensaje .= 'Error: ' . $_FILES['BtnBuscar']['error'];
    }
}
$_SESSION['mensaje'] = $mensaje;
// header("Location: index.php");
