<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/method_get.css">
    <title>Datos del Usuario</title>
</head>

<body>
<a href="index.html#section-respuestas">
        <img class="home" src="img/back_button.png" alt="imagen botón regresar">
</a>
   <!--Se usa el Method GET--->  
    <div class="main-frame-cal">
    <form action="method_get.php" method="get">
        <div class="form-group">
     <!--Se específica en el placeholder lo que debe digitar el usuario---> 
            <label for="exampleFormControlInput1">Nombres</label>
            <input type="text" name="nombre" class="form-control" id="exampleFormControlInput1" placeholder="Por favor registre sus Nombres Completos">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Apellidos</label>
            <input type="text" name="apellido" class="form-control" id="exampleFormControlInput1" placeholder="Por favor registre sus Apellidos">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Número de Cédula</label>
            <input type="text" name="cc" class="form-control" id="exampleFormControlInput1" placeholder="Por favor registre su Número de Cédula">
        </div>
        <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
    </form>

    <?php

    $edad = 0;
    
    if (isset($_GET['verificar'])) {
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $cedula = $_GET['cc'];
        //Se especifican los enunciados que muestran los datos//
        echo "Nombres Completos: ".$nombre."<br>";
        echo "Apellidos: ".$apellido."<br>";
        echo "Número de Cédula: ".$cedula."<br>";

    }

    ?>

    </div>
</body>

</html>