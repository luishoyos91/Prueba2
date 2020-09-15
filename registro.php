<?php
    include("conexion.php");
?>

<?php
        if(isset($_POST['insertar'])){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $documento = $_POST['documento'];
            $edad = $_POST['edad'];
            $rol = $_POST['rol'];
            $insertar = "INSERT INTO usuarios (nombre,apellido,documento,edad,id_rol) VALUES ('$nombre','$apellido','$documento','$edad','$rol')" or die (mysqli_error($con));
            
            $ejecutar = mysqli_query($con, $insertar);            

            if($ejecutar){
                echo "<script>alert('Usuario Guardado Correctamente')</script>";
                echo "<script>window.open('index.php','_self')</script>";
                mysql_close($con);
            }else{
                echo "<script>alert('Usuario No Guardado')</script>";
                echo "<script>window.open('index.php','_self')</script>";
                mysql_close($con);
            }          
        }
    ?>