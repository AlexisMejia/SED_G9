<?php 
include("db_cnt.php");

//saving data from register to database
if (isset($_POST['register'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
        $user = trim($_POST['user']);
        $pwd = trim($_POST['password']);
        $pssw_cifrada = password_hash($pwd, PASSWORD_DEFAULT, );
        $consulta = "INSERT INTO login(user, pssw) VALUES ('$user','$pssw_cifrada')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?> 
            echo "<script>
                        alert('Welcome!');
                        window.location= 'index.php'
                </script>";
            <?php
        } else {
            ?>  
            echo "<script>
                        alert('Ups,something went wrong!');
                        window.location= 'loginForm.php'
                </script>";
            <?php
        }
    }   else {
        ?>  
        echo "<script>
                    alert('Please fill in all fields!');
                    window.location= 'loginForm.php'
            </script>";
        <?php
    }
}

//saving data from FORM to database
if(isset($_POST['registerF'])){
    if(strlen($_POST['pssN']) >= 1 && strlen($_POST['names']) >= 1 
    && strlen($_POST['age']) >= 1 && strlen($_POST['citizen']) >= 1
    && strlen($_POST['phone']) >= 1 && strlen($_POST['cFrom']) >= 1 
    &&strlen($_POST['cTo']) >= 1 && strlen($_POST['dateF']) >= 1
    && strlen($_POST['timeF']) >= 1 && strlen($_POST['seat']) >= 1 
    && strlen($_POST['price']) >= 1 && strlen($_POST['class']) >= 1){
        $pssN = trim($_POST['pssN']);
        $name = trim($_POST['names']);
        $age = trim($_POST['age']);
        $citiz = trim($_POST['citizen']);
        $phone = trim($_POST['phone']);
        $from = trim($_POST['cFrom']);
        $to = trim($_POST['cTo']);
        $date= trim($_POST['dateF']);
        $time = trim($_POST['timeF']);
        $seat = trim($_POST['seat']);
        $price = trim($_POST['price']);
        $class = trim($_POST['class']);
        $query = "INSERT INTO form2(passp_user, name_user, age_user, citi_user, phone_user, pais_origen,pais_llegada,fecha_reg,hora_vuelo,asiento, precio,clase)
                    VALUES ('$pssN','$name','$age','$citiz','$phone','$from','$to','$date','$time','$seat','$price','$class')";
        $resultado = mysqli_query($conex,$query);
        if ($resultado) {
            ?> 
            echo "<script>
                        alert('¡Te has inscrito correctamente!');
                        window.location= 'index.php'
                </script>";
            <?php
        } else {
            ?>  
            echo "<script>
                        alert('¡Ups ha ocurrido un error!');
                        window.location= 'createForm.php'
                </script>";
            <?php
        }
    }   else {
        ?>  
        echo "<script>
                    alert('¡Por favor complete los campos!');
                    window.location= 'createForm.php'
            </script>";
        <?php
    }   
}


?>
