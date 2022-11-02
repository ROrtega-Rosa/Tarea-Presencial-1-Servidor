<?php
/**
 * Implemente un formulario HTML y validar con php;
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
    <!---le pedimos al usuario los datos mediante un formulario con etiquetas input--->
    <h1 style="padding:20px ;">Formulario</h1>
<form style="padding: 20px;" method="post">
<div class="row">
  <div class="col">
    <label>NIF</label>
    <input type="text" class="form-control" placeholder="nif" aria-label="nif" name="nif">
  </div>
  <div class="col">
    <label>Nombre</label>
    <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="nombre">
  </div>
  <div class="col">
    <label>Primer Apellido</label>
    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="apellido1">
  </div>
</div>
<div class="row">
  <div class="col">
    <label>Segundo Apellido</label>
    <input type="text" class="form-control" placeholder="apellido2" aria-label="apellido2"name="apellido2">
  </div>
  <div class="col">
    <label>Fecha de nacimiento</label>
    <input type="text" class="form-control" placeholder="fecha" aria-label="fecha" name="fecha">
    </div>  
</div>
<div class="row">
  <div class="col">
  <label>Email</label>
    <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email">
    </div> 
    <label>Contraseña</label>
    <input type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" name="contrasenia">
  </div>
 
</div>
<div class="col">
    
    <input type="submit" name="enviar" value="submit">
    
  </div>
</div>
</form>
<?php
// recogemos los datos con el metodo post mediante el boton "enviar"
if(isset($_POST["enviar"])){ 
    $nif=$_POST["nif"];
    $nombre= trim($_POST["nombre"]);
    $apellido1=trim($_POST["apellido1"]);
    $apellido2=trim($_POST["apellido2"]);
    $fecha=$_POST["fecha"];
    $email=filter_var($_POST["email"],FILTER_SANITIZE_EMAIL);
    $contrasenia=trim($_POST["contrasenia"]);
    //comprobamos que existan los datos recibidos
    if(empty($nif)){

        
        
       echo "<div class='alert alert-primary' role='alert'>
           el nif definido
          </div>";
    }else{
        $formato=preg_match("/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]{1}$/i",$nif);
        if($formato==1){

           echo $nif."</br>";
        }else{
           echo "<div class='alert alert-primary' role='alert'>
           el nif no es valido
          </div>";
            
        }

    }
    if(empty($nombre)){

          
       echo "<div class='alert alert-primary' role='alert'>
           nombre No definido =(
          </div>";
    }else{
        $formato2=preg_match("/^[A-Za-z]{1,15}$/i",$nombre);
        if($formato2==1){

           echo $nombre."</br>";
        }else{
            // introducimos alertas si no existen los datos o si se introducen de forma erronea
         echo   "<div class='alert alert-primary' role='alert'>
           el nombre no es valido 
          </div>";
        }


    }

    if(empty($apellido1)){

        echo  
        "<div class='alert alert-primary' role='alert'>
           el primer apellido no definido =(
          </div>";
    }else{
        $formato2=preg_match("/^[A-Za-z]{1,20}$/i",$apellido1);
        if($formato2==1){

           echo $apellido1."</br>";
        }else{

            echo   "<div class='alert alert-primary' role='alert'>
            el primer apellido no es valido
           </div>";
        }


    }
    if(empty($apellido2)){

        echo   "<div class='alert alert-primary' role='alert'>
        el segundo apellido  no es definido =(
       </div>"; 
    }else{
        $formato3=preg_match("/^[A-Za-z]{1,20}$/i",$apellido2);
        if($formato3==1){

           echo $apellido2."</br>";
        }else{

            echo   "<div class='alert alert-primary' role='alert'>
            el segundo apellido no es valido
           </div>";
        }


    }
    if(empty($fecha)){

        echo   "<div class='alert alert-primary' role='alert'>
          la fecha no es definida =(
          </div>"; 
    }else{
       echo $fecha."</br>";


    }
    if(empty($email)){

        echo   "<div class='alert alert-primary' role='alert'>
        el email no es definido =(
       </div>";
    }else{
       if(filter_var($email,FILTER_VALIDATE_EMAIL)){ // filtramos el email para comprobar si es valido
        
        echo $email."</br>";
       }else{

        echo   "<div class='alert alert-primary' role='alert'>
        el email no es valido
       </div>";
       }


    }
    if(empty($contrasenia)){

        echo   "<div class='alert alert-primary' role='alert'>
       la contraseña no es definida =(
       </div>";
    }else{


        if(strlen($contrasenia)>6){

            echo $contrasenia."</br>";
        }else{
            echo   "<div class='alert alert-primary' role='alert'>
            la contraseña no es valido
           </div>";
        }
    }

}



?>  
</body>
</html>