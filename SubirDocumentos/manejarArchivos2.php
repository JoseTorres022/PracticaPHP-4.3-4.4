<?php
if (isset($_POST['EnviarArchivo'])) {
    $directorio = '../archivos/';
    $direccionCompleta = $directorio . basename($_FILES['BuscarArchivo']['name']);

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