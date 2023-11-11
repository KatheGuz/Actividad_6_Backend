<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CDN BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edad_exacta.css">
    <!--Se cambia el título correspondiente al punto a desarrollar-->
    <title>Calculadora Edad Exacta</title>
</head>

<body>
    <a href="index.html#section-respuestas">
    <!--Se añade imagen y su nombre correspondiente-->
        <img class="home" src="img/back_button.png" alt="imagen botón regresar">
    </a>
    <div class="main-frame-cal">
    <!--Se completa el FORM con ACTION--->
    <form action="edad_exacta.php" method="POST">
    <div class="form-group">
            <label for="exampleFormControlInput1">Seleccione su fecha de nacimiento:</label>
            <input type="date" name="f_n" class="form-control" id="exampleFormControlInput1">
    </div>
    <!--Se completa el BUTTON con TYPE y se corrige la palabra ENVIAR-->
    <button type="submit" name="verificar" class="btn btn-outline-info">Enviar</button>
    </form>

    <?php
    

     const constante_18= 18;
    define ("constante0","0");
    
    if (isset($_POST['verificar'])) {
        $f_n = new DateTime($_POST['f_n']);
        $date2 = new DateTime(date("y-m-d"));

        $diff = $f_n->diff($date2);

        $edad_actual = $diff->y;
        $edad_meses = $diff->m;
        $edad_dias = $diff->d;
    
    if ($edad_actual >= constante_18) {
            echo "<h1>Es mayor de edad, dado que tiene "  .$edad_actual. " años </h1>";
        }
        #comentario: else if (18 > $edad  && 0 <  $edad)
        else if ($edad_actual < constante_18 && $edad_actual > constante0) {
            echo "<h2> Es menor de edad, dado que tiene "  .$edad_actual. " años </h2>";
        }else{
            echo "<h2> No válido </h2>";
        }
        
        //Se añade descripción específica en el resultado//
        echo " A hoy su edad es: <br> Años: ".$edad_actual." <br> Meses: ".$edad_meses." <br> Días: ".$edad_dias;

    }

    ?>

    </div>
</body>

</html>