<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrategias de Afrontamiento</title>
    <link rel="shortcut icon" href="iconos/estrategias.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <!-- Código PHP para incluir lógica de otros archivos -->
<?php
    include("conexion.php");
    include("registro.php");
    include("eliminar.php");
    /*  $con= mysqli_connect("localhost", "root","","proyecto_final") or die ("Error en la conexión a base de datos");*/
?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">
    <img src="iconos/estrategias.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
    Afrontamiento y Toma de Decisiones
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">Usuarios registrados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#redessociales">Redes Sociales</a>
        </li>
      </ul>
    </div>
  </nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/imagen1.jpg" class="d-block w-100" alt="Estrategias1" title="Estrategias de Afrontamiento" style="height: 400px;">
      </div>
      <div class="carousel-item" >
        <img src="img/imagen2.jpg" class="d-block w-100" alt="Estrategias de Afrontamiento" style="height: 400px;">
      </div>
      <div class="carousel-item">
        <img src="img/imagen3.jpg" class="d-block w-100" alt="Estrategias de Afrontamiento" style="height: 400px;">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
    <div class="container">
      <h1>¿Sabes que son estrategias de afrontamiento y toma de decisiones?</h1>
      <p id="parrafo_educacion">
        Afrontamiento son los recursos psicológicos que las personas ponen en practica 
        para la evitación de situaciones estresantes. Son importantes por que nos pueden 
        ayudar a evitar o disminuir conflictos entre personas. 
        Existen dos tipos de afrontamiento:
      </p>
      <ul>
        <li><b><i>Afrontamiento focalizado en el problema:</i></b> Está dirigido a la modificación 
        de algún evento en el contexto que genere algún tipo de malestar o estrés. <br>
        <b>Ejemplo: </b>La manera como ustedes responden en una situación que les esta generando estrés, 
        que alternativas de soluciones tienen como intervienen para cambiar efectos negativos en la situación.  
        </li>
        <li><b><i>Afrontamiento focalizado en las emociones:</i></b> Esta consiste en disminuir las 
        emociones negativas que generan estrés o malestar, la regulación de sus emociones que les 
        ayuda a la disminución de la situación estresante a la cual se están enfrentando. 
        </li>
      </ul>
      <video class="video" src="videos/estilos_de_afrontamiento.mp4" controls preload="auto" autoplay="autoplay"></video>
      <br>
      <br>
      <h1>¿Que es la toma de decisiones?</h1>
      <p id="parrafo_educacion">Va dirigido a las conductas adecuadas que se debe tener en un 
      contexto determinado, partiendo de las diferentes alternativas que este nos ofrece, es 
      el individuo el encargado de decidir en función a su necesidad. Desde las teorías de toma 
      de decisiones nacen dos enfoques que parten o tiene relevancia desde la cantidad de personas 
      implicadas, que parten de decisiones de una persona o de la toma de decisiones de dos o más 
      para la solución de una situación, tarea o problema. 
      </p>
      <br>
      <div class="tipos_educacion">        
        <img class="img_educacion" src="img/afrontamiento2.png" alt="educacion_informal" title="Educación Informal">
        <p id="parrafos_tipo_educacion">Se deben reforzar la buena toma de decisiones, algunos pasos 
        que pueden beneficiar: Tener claros los objetivos a los que se quiere llegar para así evaluar 
        cual va ser la mejor decisión que se va tomar. Analizar cada situación a la que se va enfrentar, 
        evaluar las posibles consecuencias y hacer reflexión de la mas adecuada para el momento.
        Generar diversas alternativas con sus respectivas consecuencias para tener mas clara la 
        decisión que se va tomar.
        </p>
        <br>
      </div>
      <video class="video" src="videos/toma_de_decisiones.mp4" controls preload="auto"></video>
      <br>
      <br>
      <div class="card" style="width: 25rem;" id="card_register">
        <div class="card-body">
          <h5 class="card-title" id="titulo_form">Si deseas registrarte para tener más información, 
            completa el siguiente formulario:</h5>
            <form method="POST" action="index.php">
              <div class="col-md-12">
                  <label class="label_form">Nombre:</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">            
              </div>
              <div class="col-md-12">
                  <label class="label_form">Apellido:</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="apellido">
              </div>
              <div class="col-md-8">
                  <label class="label_form">Identificación:</label>
                  <input type="number" class="form-control" name="documento">
              </div>
              <div class="col-md-5">
                  <label class="label_form">Edad:</label>
                  <input type="number" class="form-control" name="edad">
              </div>
              <br>
              <div class="col-md-6">
                <label class="label_form">Rol:</label>
                <select class="custom-select" id="validationServer04" name="rol">
                <option selected disabled value="">--Seleccione--</option>
                <?php 
                    $conexion = mysqli_connect("localhost", "root","","proyecto_final") or die ("Error en la conexión a base de datos");
                    $sql = "SELECT id_rol,nombre_rol FROM roles";

                    $query = $conexion -> query ($sql);

                    while($valores = mysqli_fetch_array($query)){
                      echo "<option value='".$valores['id_rol']."'>".$valores['nombre_rol']."</option>";
                    }
                  ?>                                    
                </select>  
              </div>            
              <br>
              <div class="col-md-12">
              <input type="submit" class="btn btn-primary" name="insertar" value="Guardar" id="boton_guardar"></button>
              </div>            
              <br>
              </form>
        </div>
      </div>
    </div>  
  <footer>
    <hr width="95%" color="#343a40" >
    <div class="iconosredes" id="redessociales">
      <div class="ajusteicono">
        <a target="_blank" href="https://www.facebook.com/LaIberoU"><img src="iconos/facebook.svg" alt="facebook" title="Facebook" width="30px" height="30px"></a>
      </div>
      <div class="ajusteicono">
        <a target="_blank" href="https://twitter.com/LaIberoU_"><img src="iconos/twitter.svg" alt="twitter" title="Twitter" width="30px" height="30px"></a>
      </div>
      <div class="ajusteicono">
          <a target="_blank" href="https://www.instagram.com/laiberou"><img src="iconos/instagram.svg" alt="instagram" title="Instagram" width="30px" height="30px"></a>
      </div>
    </div>
    <div class="textofooter">
            <p class="parrafo_footer">© COPYRIGHT 2020 Bogotá Corporación Universitaria Iberoamericana
                <br>                    
                Creado por <b>Michel Natalia Corredor Correal</b>
            </p>
    </div>              
  </footer>  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
  </script>
  <script src="js/script.js"></script>
</body>
</html>