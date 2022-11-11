<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivos en PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../PracticaPHP 4.3-4.4//miestilo.css">
</head>

<body>
    <?php
    // if (isset($_SESSION['mensaje']) && $_SESSION['mensaje']) {
    //     printf('<b>%s</b>', $_SESSION['mensaje']);
    //     unset($_SESSION['mensaje']);
    // }
    // 
    ?>
    <main>

        <p>Practica 4.3 Tratamiento de Formularios | Practica 4.4 Manejo de Objetos de Servidor</p>
        <header>Gestor de Archivos <span>by josé torres</span></header>

        <p class="titulo-fomrulario1">Crear archivo de texto</p>
        <section>
        <a href="../PracticaPHP 4.3-4.4/ArchivoTXT/crearTXT.php"><button>Crear ficheros</button></a>
        <a href="../PracticaPHP 4.3-4.4/ArchivoTXT/eliminarTXT.php"><button>Eliminar ficheros</button></a>
        </section>

        <p class="titulo-fomrulario1">Subir archivos en otras extenciones</p>
        <form class="formulalrio-2" action="../PracticaPHP 4.3-4.4/manejarArchivos2.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Sube tus archivos PDF, Word o Excel</legend>
                <div>
                    <input type="file" name="BuscarArchivo">
                </div>
                <div>
                    <input type="submit" name="EnviarArchivo" value="Subir">
                </div>
            </fieldset>
        </form>
    </main>
</body>

</html>