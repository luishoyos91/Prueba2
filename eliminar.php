<?php
    include("conexion.php");
?>

<?php
            if(isset($_GET['eliminar'])){
                $borrar_id = $_GET['eliminar'];

                $borrar = "DELETE FROM usuarios WHERE id = $borrar_id";

                $ejecutar = mysqli_query($con,$borrar);

                if($ejecutar){
                    echo "<script>alert('Datos Eliminados!')</script>";
                    echo "<script>window.open('usuarios.php','_self')</script>";
                }
            }
?>