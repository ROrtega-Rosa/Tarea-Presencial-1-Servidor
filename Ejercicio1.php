<?php

/**
 * Calcular una ecuación de segundo grado
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<h3 style="padding:20px ;">Introduzca los coeficientes del polinomio de segundo grado</h3>
<form style="padding: 20px;" method="post">
<div class="row">
  <div class="col">
    <label>A</label>
    <input type="text" class="form-control" placeholder="numA" aria-label="numA" name="numA">
  </div>
  <div class="col">
    <label>B</label>
    <input type="text" class="form-control" placeholder="numB" aria-label="numB" name="numB">
  </div>
</div>
<div class="col">
    <label>C</label>
    <input type="text" class="form-control" placeholder="numC" aria-label="numC" name="numC">
  </div>
</div>
<div class="col">
    
    <input type="submit" name="calcular" value="submit">
    
  </div>
</div>
</form>
<?php
// abrimos el espacio php donde recogemos los datos con el metodo post
if(isset($_POST["calcular"])){

    $numA=$_POST["numA"];
    $numB=$_POST["numB"];
    $numC=$_POST["numC"];
    // comprobamos si está vacío
    if(empty($numA) || empty($numB) || empty($numC)){

        echo "faltan datos para resolver la ecuacion";
    }else{
        //comprobamos si son numeros
        if(is_numeric($numA) && is_numeric($numB) && is_numeric($numC)){
        $calcular=($numB*$numB)-4*$numA*$numC;
        $raiz=sqrt($calcular);
        $x=((-$numB)+$raiz)/(2*1);
        $y=((-$numB)-$raiz)/(2*1);
        echo "el resultado x es: ".$x.". el resultado de y es: ".$y;
        }else{
            echo "los datos introducidos no son correctos";
        }
    }



}




?>
    
</body>
</html>