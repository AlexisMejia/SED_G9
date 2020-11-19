<?php
     /* A continuación, realizamos la conexión con nuestra base de datos en MySQL */
    include("db_cnt.php");
    $user =htmlentities($_POST["user"]);
    $pattern = "/^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$/";
    $pwd_aux = htmlentities($_POST["pswd"]);
    $pswd = preg_match_all($pattern,$pwd_aux,$matches);
    if(pswd !=1){
        $pswd = $pwd_aux;
        $pswd_hash = hash('sha256',$pswd);
    }
    /* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función 
     htmlentities para evitar inyecciones SQL. */
    $myusuario = mysqli_query($conex,"select user from cliente where user =  '".$user."'");
    $nmyusuario = mysqli_num_rows($myusuario);

     //Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario...
    if($nmyusuario != 0){
        $sql = "select user
                from cliente
                where estado = 1
                and user = '".$user."' 
                and pssw = '".$pswd_hash."'";
        $myclave = mysqli_query($conex,$sql);
        $nmyclave = mysqli_num_rows($myclave);
          //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo.
            if($nmyclave != 0){
                session_start();
               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
                $_SESSION["autentica"] = "SIP";
                $_SESSION["usuarioactual"] = mysqli_fetch_assoc($myclave); //nombre del usuario logueado.
               //Direccionamos a nuestra página principal del sistema.
                ?> 
                    echo "<script>
                            alert('Welcome!');
                            window.location= '../html/index.php'
                        </script>";
                <?php
            }
            else{

                echo "Ha ocurrido un error";
            header("Refresh: 10; url=../HTML/loginForm.php");
                /*?> 
                    echo "<script>
                            alert('UPS, something went wrong!');
                            window.location= '../html/loginForm.php'
                        </script>";
                <?php*/
            }
        }else{
            ?> 
            echo "<script>
                    alert('Please fill out all the fields!');
                    window.location= '../html/loginForm.php'
                </script>";
        <?php
        }
    mysqli_close($conex);

?>
