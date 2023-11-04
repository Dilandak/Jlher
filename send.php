<?php
include("conexion.php");
if (isset($_POST['send'])) {

    if (
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['password']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['telefono']) >= 1 


    )  {
        $username= trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $telefono = trim($_POST['telefono']);
        $consulta = "INSERT INTO accounts (username,password, email, telefono)
                      VALUES('$username','$password','$email','$telefono') ";
        $resultado = mysqli_query($conexion, $consulta);

       if($resultado) {
            ?>
                <h3 class="success" > Tu informacion se ha enviado </h3>
            <?php
        } else {
            ?>
               <h3 class="error"> Ocurrio un error </h3>
            <?php
        }

  } else { ?> 
            <h3 class="error"> Llena todos los campos </h3> 
            
    <?php } 

}   
?>