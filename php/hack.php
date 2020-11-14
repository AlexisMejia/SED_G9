<?php

include("db_cnt.php");

//saving data from register to database
if (isset($_POST['register'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
        $user = trim($_POST['user']);
        $pwd = trim($_POST['password']);
        $cont = 0;
        $pssw_cifrada = password_hash($pwd, PASSWORD_DEFAULT, );
        $consulta = "INSERT INTO login(user, pssw) VALUES ('$user','$pssw_cifrada')";
        $resultado = mysqli_query($conex,$consulta);

        while($pass = $resultado->dba_fetch(PDO::dba_fetch)){
            if(password_verify($pwd, $pass['pwd'])){
                $cont++;
            }
        }

        if($cont>0){
            ?> 
            echo "<script>
                        alert('Welcome!');
                        window.location= 'index.php'
                </script>";
            <?php
        }else{
            ?>  
            echo "<script>
                        alert('Ups,something went wrong!');
                        window.location= 'loginForm.php'
                </script>";
            <?php
        }
}
}
?>