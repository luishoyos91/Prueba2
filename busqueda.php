<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Usuarios</title>
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

<?php

    $busqueda = strtolower($_REQUEST['busqueda']);
    if(empty($busqueda)){
        header("location: index.php");
    }

?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php">
      <img src="iconos/estrategias.svg" width="30" height="30" class="d-inline-block align-top" alt="Logo" loading="lazy" title="Ir al Home">
      Afrontamiento y Toma de Decisiones
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="usuarios.php">Usuarios registrados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#redessociales">Redes Sociales</a>
        </li>
      </ul>
    <form class="form-inline my-2 my-lg-0" method="GET" action="busqueda.php">
        <input  class="form-control mr-sm-2" type="search" placeholder="Buscar usuario" aria-label="Search" name="busqueda">
        <input type="submit" class="btn btn-secondary" value="Buscar" id="boton_buscar"></button>
    </form>
    </div>
  </nav>

  <section>
      <article>
        <div class ="container">
            <h3 class="titulos">Usuarios Registrados</h3>
        <table class="table table-hover table-striped table-responsive" id="tabla_usuarios">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Documento</th>
                <th scope="col">Edad</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php
                    $consulta = "SELECT id,nombre,apellido,documento,edad FROM usuarios
                                                    WHERE
                                                    (
                                                    id LIKE '%$busqueda%' OR
                                                    nombre LIKE '%$busqueda%' OR
                                                    apellido LIKE '%$busqueda%' OR
                                                    documento LIKE '%$busqueda%' OR
                                                    edad LIKE '%$busqueda%'
                                                    )";

                    $ejecutar = mysqli_query($con, $consulta);

                    $i=0;

                    while($fila = mysqli_fetch_array($ejecutar)){
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $apellido = $fila['apellido'];
                        $documento = $fila['documento'];
                        $edad = $fila['edad'];

                        $i++;
                    
                ?>

                <tr>
                <th scope="row"><?php echo $id; ?></th>
                <td><?php echo $nombre; ?></td>
                <td><?php echo $apellido; ?></td>
                <td><?php echo $documento; ?></td>
                <td><?php echo $edad; ?></td>
                <td><a href="actualizar.php?editar=<?php echo $id; ?>"> <img src="iconos/update-user.svg" class="icono_eliminar" alt="icono_eliminar" title="Editar Usuario"></a>
                    <a href="usuarios.php?eliminar=<?php echo $id; ?>"> <img src="iconos/remove-user.svg" class="icono_eliminar" alt="icono_eliminar" title="Eliminar Usuario"></a>
                </td> 
                </tr>

                <?php } ?>

            </tbody>
        </table>

        </div>


      </article>
  </section>
  
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