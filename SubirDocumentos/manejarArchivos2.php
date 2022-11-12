<?php
if (isset($_POST['EnviarArchivo'])) {
    $directorio = '../PracticaPHP 4.3-4.4/archivos/';
    $direccionCompleta = $directorio . basename($_FILES('BuscarArchivo'['name']));

    $infoDocumento = pathinfo($direccionCompleta);
    echo "<br>" . $direccionCompleta;
    echo "<br>" . $infoDocumento['extension'];
    echo "<br>" . $infoDocumento['basename'];
    echo "<br>" . $infoDocumento['filename'];
    echo "<br>" . $infoDocumento['dirname'];
    echo "<br><br>";
?>
    <div style="margin:0 auto">
        <h1>Datos del documento</h1>
        <!-- </div> -->
        <?php
        foreach ($infoDocumento as $atributo => $valor) {
        ?>
            <p style="margin: 0 auto; background-color: black; color: white; font-weight: bold; width: 80%;">
                <?php
                echo $atributo . ": " . $valor;
                ?>
            </p>
    </div>
<?php
        }

        echo "<br><br>";
        if (move_uploaded_file($_FILES['BuscarArchivo']['tmp_name'], $direccionCompleta)) {
            echo "El archivo es válido y se cargó correctamente.<br><br>";
        } else {
            echo "La subida ha fallado";
        }
    }
    if (isset($_POST['EnviarArchivo'])) {
        echo "Archivo bajado con exito";
    }
?>
<?php
// session_start();
// $mensaje = '';
// if (isset($_POST['BtnCargar'])) {
// if (isset($_FILES['BtnBuscar'])) {
// //obtenermos los detalles del archivo
// $direccionArchivo = $_FILES['BtnBuscar']['tmp_name'];
// $nombreArchivo = $_FILES['BtnBuscar']['name'];
// $pesoArchivo = $_FILES['BtnBuscar']['size'];
// $tipoArchivo = $_FILES['BtnBuscar']['type'];
// $nombreCampos = explode(".", $nombreArchivo);
// $extensionArchivo = strtolower(end($nombreCampos));

// //limpiar nombre del archuvo
// $nuevoNombreArchivo = md5(time() . $nombreArchivo) . '.' . $extensionArchivo;

// //checar archivos epecificos
// $archivosPermitidos = array('pdf', 'docx', 'xlsx');

// if (in_array($extensionArchivo, $archivosPermitidos)) {
// //mover dichos archuvos a un direccion especifica
// $archivoCargado = '/archivos/';
// $directorioDestino = $archivoCargado . $nuevoNombreArchivo;

// if (move_uploaded_file($direccionArchivo, $directorioDestino)) {
// $mensaje = 'Archivo cargado correctamente.';
// } else {
// $mensaje = 'Uppps..., ocurrio un error al cargar/mover el archivo al directiorio de destino,';
// }
// } else {
// $mensaje = 'Falla en la carga del archivo. Extenciones permitidas: ' . implode(',', $archivosPermitidos);
// }
// } else {
// $mensaje = 'Ha ocurrido un error cuando se cargaba el archivo';
// $mensaje = 'Por favor, checa el siguiente error.';
// $mensaje .= 'Error: ' . $_FILES['BtnBuscar']['error'];
// }
// }
// $_SESSION['mensaje'] = $mensaje;
// header("Location: index.php");
?>