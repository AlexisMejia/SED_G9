<?php 
include("db_cnt.php");


//saving data from register to database
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

if (isset($_POST['registerF'])) {
    if (strlen($_POST['cFrom']) >= 1 &&
    strlen($_POST['cTo']) >= 1 
    && strlen($_POST['dateF']) >= 1
    && strlen($_POST['timeF']) >= 1 ) {
        $from = trim($_POST['cFrom']);
        $to = trim($_POST['cTo']);
        $date= trim($_POST['dateF']);
        $time = trim($_POST['timeF']);
        $query = "INSERT INTO vuelo(pais_origen,pais_llegada,fecha_reg,hora_vuelo)
                    VALUES ('$from','$to','$date','$time')";
        $resultado = mysqli_query($conex,$query);
        if ($resultado) {
            ?> 
            echo "<script>
                        alert('¡Te has inscrito correctamente!');
                        window.location= 'userForm.php'
                </script>";
            <?php
        } else {
            ?>  
            echo "<script>
                        alert('¡Ups ha ocurrido un error!');
                        window.location= 'flightForm.php'
                </script>";
            <?php
        }
    }   else {
        ?>  
        echo "<script>
                    alert('¡Por favor complete los campos!');
                    window.location= 'flightForm.php'
            </script>";
        <?php
    }
}


//saving data from user to database
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
            echo "<script>
                        alert('¡Te has inscrito correctamente!');
                        window.location= 'ticketForm.php'
                </script>";
            <?php
        } else {
            ?>  
            echo "<script>
                        alert('¡Ups ha ocurrido un error!');
                        window.location= 'userForm.php'
                </script>";
            <?php
        }
    }   else {
        ?>  
        echo "<script>
                    alert('¡Por favor complete los campos!');
                    window.location= 'userForm.php'
            </script>";
        <?php
    }   
}

//saving data from ticket to database
if (isset($_POST['registerT'])) {
    if (strlen($_POST['seat']) >= 1 && strlen($_POST['price']) >= 1 && strlen($_POST['class']) >= 1 && strlen($_POST['passnumber']) >= 1) {
        $seat = trim($_POST['seat']);
        $price = trim($_POST['price']);
        $class = trim($_POST['class']);
        $pssn = trim($_POST['passnumber']);
        $query = "INSERT INTO tciket(asiento, precio,clase,passport) VALUES ('$seat','$price','$class','$pssn')";
        $resultado = mysqli_query($conex,$query);
        if ($resultado) {
            ?> 
            echo "<script>
                        alert('¡Te has inscrito correctamente!');
                        alert('Gracias por usar nuestro sistema')
                        window.location= 'loginForm.php'
                </script>";
            <?php
        } else {
            ?>  
            echo "<script>
                        alert('¡Ups ha ocurrido un error!');
                        window.location= 'ticketForm.php'
                </script>";
            <?php
        }
    }   else {
        ?>  
        echo "<script>
                    alert('¡Por favor complete los campos!');
                    window.location= 'ticketForm.php'
            </script>";
        <?php
    }
}
?>
