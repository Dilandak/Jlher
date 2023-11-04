<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilos/estilos2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon " type="" href="imagenes/J original.png">


</head>
<body>
    
<form method="post" autocomplete="off">
       
    <h2 class="registro">Registro</h2>

      <div class="input-group">

         <div class="input-container">
            <input type="text" name="username" placeholder="Nombre">
            <i class="fa-solid fa-user"> </i>
         </div>
         
         <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña">
            <i class="fa-solid fa-lock"> </i>
         </div>

         <div class="input-container">
            <input type="email" name="email" placeholder="Correo">
            <i class="fa-solid fa-envelope"> </i>
         </div>

         <div class="input-container">
            <input type="tel" name="telefono" placeholder="Telefono">
            <i class="fa-solid fa-phone"> </i>
         </div>

      
      <input type="submit" name="send" class="btn" value="Registrar">

       <div>
       <a class="subrayado" href="terminos3.html">Terminos y condiciones 
      
    
       <a class="subrayado" href="iniciosesion.html">¿Ya tienes una cuenta? <br>Inicia Sesión</a>  
      
       </div>
      
       
                       
                

      </div>
</for>


<?php

   include("send.php");

   ?>


</body>
</html>