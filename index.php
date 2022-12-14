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
    <link rel="stylesheet" href="../PracticaPHP 4.3-4.4/miestilo.css">
</head>

<body>

    <main>

        <p class="practica">Practica 4.3 Tratamiento de Formularios | Practica 4.4 Manejo de Objetos de Servidor</p>
        <header>Gestor de Archivos <span>José Torres</span></header>

        <section class="section1">
            <div class="titulos">
                <p class="titulos">Crear archivo .txt</p>
            </div>
            <?php
            echo $_GET['msg'];
            ?>
            <div class="botones">
                <a href="../PracticaPHP 4.3-4.4/CrearArchivoTXT/crearTXT.php"><button>Crear fichero</button></a>
                <a href="../PracticaPHP 4.3-4.4/CrearArchivoTXT/eliminarTXT.php"><button>Eliminar fichero</button></a>
                <a href="../PracticaPHP 4.3-4.4/CrearArchivoTXT/leerTXT.php"><button>Leer fichero</button></a>
                <a href="../PracticaPHP 4.3-4.4/CrearArchivoTXT/mitexto.txt" download="mitexto.txt"><button>Descargar
                        archivo (.txt)</button></a </div>
        </section>

        <section class="section2">
            <div>
                <p class="titulos">Subir Documentos</p>
            </div>
            <form class="formulalrio-2" action="../PracticaPHP 4.3-4.4/SubirDocumentos/manejoDocumentos.php" method="post" enctype="multipart/form-data">

                <fieldset>
                    <legend>Sube tus archivos PDF, Word o Excel</legend>
                    <div>
                        <input type="file" name="BuscarArchivo">
                    </div>
                    <div>
                        <input type="submit" name="EnviarArchivo" value="Subir">
                    </div>
                    <div>
                        <!-- <button><a href="../"></a></button> -->
                    </div>
                </fieldset>
            </form>
        </section>

    </main>
</body>

</html>