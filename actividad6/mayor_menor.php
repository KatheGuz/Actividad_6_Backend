<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/menor_mayor.css">
    <title>Mayor o menor de edad</title>
</head>

<body>
<a href="index.html#section-respuestas">
       <img class="home" src="img/back_button.png" alt="imagen botón regresar">
    </a>
    <div class="main-frame-cal">
    <form action="mayor_menor.php" method="POST">
        <div class="form-group">
            <label for="exampleFormControlInput1">REGISTRE SU EDAD</label>
            <!--Se añade Edad máxima que debe digitar el usuario--->       
            <input type="number" max="150"name="edad" class="form-control" id="exampleFormControlInput1" placeholder="Digite su edad">
        </div>
        <!--Se cambia el nombre del botón Resultado por: Verificar--->
        <button type="submit" name="verificar" class="btn btn-outline-info">Verificar</button>
    </form>

    <?php

    $edad = 0;
    
    if (isset($_POST['verificar'])) {
        $edad = $_POST['edad'];
        //Se deja solo un h1 como es permitido//
        if ($edad >= 18) {
            echo "<h1>Es mayor de edad</h1>";
        }
        else if (18 > $edad && 0 < $edad) {
            echo "<h2>Es menor de edad</h2>";
        }else{
            echo "<h2>No válido</h2>";
        }

    }

    ?>

    </div>
</body>

</html>