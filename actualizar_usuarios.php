<?php

    include("conexion.php");
    include("usuarios.php");
?>

<?php
        if(isset($_POST['actualizar'])){
            $id = $_POST['id'];            
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $documento = $_POST['documento'];
            $edad = $_POST['edad'];
            $consulta = "UPDATE usuarios SET nombre ='$nombre', apellido ='$apellido', documento ='$documento', edad = '$edad' WHERE id = $id" or die (mysqli_error($con));            
            $ejecutar = mysqli_query($con, $consulta);            

            if($ejecutar){
                echo "<script>alert('Usuario Actualizado Correctamente')</script>";
                echo "<script>window.open('usuarios.php','_self')</script>";
            }          
        }
    ?>