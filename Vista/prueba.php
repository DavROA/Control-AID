<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Subir una o varias imagenes al servidor</title>
</head>
 
<body>
    <?php
    # definimos la carpeta destino
    $carpetaDestino="imágenes/";
 
    # si hay algun archivo que subir
    if(isset($_FILES["archivo"]) && $_FILES["archivo"]["name"][0])
    {
 
        # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
 
            # si es un formato de imagen
            if($_FILES["archivo"]["type"][$i]=="image/jpeg" || $_FILES["archivo"]["type"][$i]=="image/pjpeg" || $_FILES["archivo"]["type"][$i]=="image/gif" || $_FILES["archivo"]["type"][$i]=="image/png")
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino.$_FILES["archivo"]["name"][$i];
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<br>".$_FILES["archivo"]["name"][$i]." movido correctamente";
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: ".$carpetaDestino;
                }
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - NO es imagen jpg, png o gif";
            }
        }
    }else{
        echo "<br>No se ha subido ninguna imagen";
    }
    ?>
 
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post" enctype="multipart/form-data" name="inscripcion">
        <input type="file" name="archivo[]" multiple="multiple">
        <input type="submit" value="Enviar"  class="trig">
    </form>

    <div class="mdl-cell mdl-cell--4-col">
                                            <div class="full-width panel mdl-shadow--1dp">
                                                <div class="mdl-cell mdl-cell--12-col mdl-cell--8-col-tablet">
                                                    <div class="photo">
                                                        <label for="foto" class="text-condensedLight" style="font-size: 18px;">Foto del producto:</label>
                                                        <p></p>
                                                        <div class="prevPhoto" title="Seleccione una imagen dando click">
                                                            <span class="delPhoto notBlock" id="X">X</span>
                                                            <label for="foto"></label>
                                                        </div>
                                                        <div class="upimg">
                                                            <input type="file" name="foto" id="foto">
                                                        </div>
                                                        <div id="form_alert"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
</body>
</html>