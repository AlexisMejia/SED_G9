<?php 
include("db_cnt.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
        $user = trim($_POST['user']);
        $pwd = trim($_POST['password']);
        $consulta = "INSERT INTO register(usuario, contra) VALUES ('$user','$pwd')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?> 
            <h3 class="ok">¡Te has inscrito correctamente!</h3>
            <?php
        } else {
            ?> 
            <h3 class="bad">¡Ups ha ocurrido un error!</h3>
            <?php
        }
    }   else {
            ?> 
            <h3 class="bad">¡Por favor complete los campos!</h3>
            <?php
    }
}
?>