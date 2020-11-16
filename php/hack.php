<?php
session_start();
include("db_cnt.php");

$session = $_SESSION['id'];
//saving data from register to database
if (isset($_POST['register'])) {
    if (strlen($_POST['user']) >= 1 && strlen($_POST['password']) >= 1) {
        $user = trim($_POST['user']);
        $pwd = trim($_POST['password']);
        $query = "SELECT * FROM login WHERE `pssw` = '$pwd'";
        $resultado = mysqli_query($conex,$consulta);
        $count = mysqli_num_rows($resultado);
        $fetch = mysqli_fetch_assoc($resultado);
        $hash = $fetch['id'];
        $n_user = $fetch['user'];

        if($count == 1){
            if(password_verify($pwd, $fetch['pssw'])){
                $_SESSION['id']= $hash;
                $_SESSION['user'] = $n_user;
                header("Location:../html/index.php");
            }
        }else{
            ?> 
            echo "<script>
                        alert('Ha ocurrido un error!');
                        window.location= '../html/loginForm.php'
                </script>";
            <?php
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