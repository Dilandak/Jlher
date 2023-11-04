<?php


// confirmar sesion

session_start();


if (!isset($_SESSION['loggedin'])) {

    header('Location: index.html');
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interfaz </title>
  <link rel="stylesheet" href="estilos/estilos3.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="icon " type="" href="imagenes/J original.png">
  <style>
    .lista-horizontal {
        list-style: none;
        padding: 0;
    }

    .lista-horizontal li {
        display: inline-block;
        margin-right: 20px; /* Espacio horizontal entre elementos */
        text-align: center; /* Centra el contenido dentro de cada elemento */
    }

    .lista-horizontal div {
        font-weight: bold; /* Texto del elemento de lista en negrita */
        color: black; /* Color del texto del elemento de lista */
    }

    .lista-horizontal p {
        margin-top: 5px; /* Espacio vertical entre el elemento de lista y el texto relacionado */
    }
</style>

</head>

<body>


  <header id="main-header">

    <a id="logo-header" href="empresa.html">
      <span class="site-name">JLHER</span>
      <span class="site-desc">Venta de chaquetas para niños y niñas de 4 a 12 años</span>
      <a href="perfil.php" class="color1"  style= "color:white;" ><i class="fas fa-user-circle"></i>Informción de Usuario</a>
        <a href="cerrar-sesion.php"  class="color1" style="color:white;"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</a>
    </a>
   <!-- <div>
      <a href=""><?php echo " ".$_SESSION['email']; ?>&nbsp;&nbsp;<img src="imagenes/correo.png" class="imagen-correo"></a>
  </div>-->

    <nav>
      <ul>
        <li><a href="ayuda.html">Ayuda<i class="fa-solid fa-question"></i></a> </li><i
          class="fa-solid fa-grip-lines fa-rotate-90"></i>
        <li><a href="CatalogoP.html">Catalogo</a></li>
      </ul>
    </nav>

  </header>





  <header>

    <div class="cambiar">

      <center>
        <h1>¡Bienvenidos a JLHER  </h1>
        <h2>Chaquetas Especializadas para Niños y Niñas de 4 a 12 Años!</h2>
      </center>
      <p>En JLHER, nos dedicamos a la confección y fabricación de chaquetas de alta calidad que combinan moda y
        comodidad para tus hijos en su etapa de preadolescencia. Nuestra misión es vestir a tus pequeños con estilo
        y personalidad,
        manteniéndolos abrigados en todas las estaciones.<br><br>

        <b>Descubre la Elegancia en la Simplicidad:</b>

        Nuestra colección ofrece una amplia variedad de estilos para adaptarse
        a cada gusto y preferencia. Desde clásicos atemporales hasta diseños modernos, cada
        chaqueta está cuidadosamente confeccionada para reflejar la
        individualidad de tu hijo o hija de 4 a 12 años. <br>

        <b>Calidad que Perdura:</b>

        En JLHER, la calidad es la columna vertebral de todo lo que hacemos.
        Cada chaqueta está confeccionada con materiales de primera calidad,
        asegurando durabilidad y comodidad en cada uso. Tus hijos merecen lo mejor,
        y eso es lo que ofrecemos.<br>

        <b>Tu Satisfacción es Nuestra Prioridad:</b> <!-- toca   alinear -->

        Nuestro equipo de atención al cliente está aquí para
        ayudarte en cada paso. Queremos asegurarnos de que tu experiencia de compra sea tan excepcional
        como nuestros productos.<br>

        Explora nuestra colección en línea, descubre la elegancia en la simplicidad y
        encuentra la chaqueta perfecta para tu hijo o hija de 4 a 12 años. En JLHER, estamos
        comprometidos a ayudarte a vestir a tus pequeños con estilo y comodidad. ¡Gracias por elegirnos!
      </p>
    </div>
    <!-- <form  action="informacion.html">
    <input class="btn" type="submit" value="Más Información" />
</form>-->









    <div class="carusel" style="width: 28%; margin-left: 1100px; margin-top: -560px;">

      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagenes/chaqueta1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagenes/chaqueta2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagenes/chaqueta3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
    </div>
    
    <footer class="abajo" >
      
      <center>
      <ul class="lista-horizontal">
       
          <img src="imagenes/J original.png" width="100px"  style="margin-left:-200px; margin-top: 0%;">
  
      <li>
          <div >¿Dónde Estamos?</div>
          <p class="negra">Calle 104 a sur #5-72 este </p>
      </li>

      <li>
          <div>Contactanos</div>
          <p class="negra">  Jlher@gmail.com <br>  +(57) 322 983 3998</p>
      </li>
      <li>
          <div>Información</div>
          <a class="subrayado" href="terminos2.html">Terminos y condiciones </a>
      </li>
  </ul>
  </center>
</footer>
   <!--<footer class="abajo">  
       <div class="contenedor"> 
       
        <ul class="lista">
          <li class="lista2">¿Dónde Estamos?</li> 
          <li class="lista3">Sobre nosostros</li> 
          <li class="lista2">Contactanos</li>    
      </ul>-->
   
      
        
        
  </footer> 
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
      crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9c61ead5a6.js" crossorigin="anonymous"></script>


</body>

</html>