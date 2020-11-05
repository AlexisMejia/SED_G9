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



if(isset($_POST['registerU'])){
    if(strlen($_POST['pssN']) >= 1 && strlen($_POST['names']) >= 1 
    && strlen($_POST['surname']) >= 1 && strlen($_POST['age']) >= 1 
    && strlen($_POST['citizen']) >= 1 && strlen($_POST['phone']) >= 1 
    && strlen($_POST['email']) >= 1){
        $pssN = trim($_POST['pssN']);
        $name = trim($_POST['names']);
        $lastn = trim($_POST['surname']);
        $age = trim($_POST['age']);
        $citiz = trim($_POST['citizen']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $query = "INSERT INTO user(passp_user, name_user, lastname_user, age_user, citi_user, phone_user, email_user)
                    VALUES ('$pssN','$name','$lastn','$age','$citiz','$phone','$email')";
        $resultado = mysqli_query($conex,$query);
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
