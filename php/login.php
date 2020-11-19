<?php
     /* A continuación, realizamos la conexión con nuestra base de datos en MySQL */
    include("db_cnt.php");

    //patrones
    $pttn_em = "/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,6}\b/";
    $pattern_p = "/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8,16}$/";
    //$pattern_sqli = "\b(ALTER|CREATE|DELETE|DROP|EXEC(UTE){0,1}|INSERT( +INTO){0,1}|MERGE|SELECT|UPDATE|UNION( +ALL){0,1})\b";

    /*Se utiliza la función htmlentities para evitar inyecciones SQL.*/
    $email = htmlentities($_POST["user"]);
    $pwd_aux = htmlentities($_POST["pswd"]);

    //preg_match_all para comprarar patrones solicitados
    $email_p = preg_match_all($pttn_em, $email, $matches);
    $pswd_p = preg_match_all($pattern_p,$pwd_aux,$matches);


    echo "email: $email_p <br>";
    echo "contraseña: $pswd_p <br>";
    //verificando tipos de datos pedidos
    if($email_p !=0 && $pswd_p !=0){
        $pswd_p = $pwd_aux;
        $pswd_hash = hash('sha256',$pswd_p);
        $email_p = $email;
    }else{
        ?> 
            echo "<script>
                            alert('UPS, something went wrong fella!');
                            window.location= '../html/loginForm.php'
                        </script>";
        <?php;
    }
    /* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función 
     htmlentities para evitar inyecciones SQL. */
    $myusuario = mysqli_query($conex,"select user from usuario where user =  '".$email_p."'");
    $nmyusuario = mysqli_num_rows($myusuario);

     //Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario...
    if($nmyusuario != 0){
        $sql = "select user
                from usuario
                where estado = 1
                and user = '".$email_p."' 
                and pssw = '".$pswd_hash."'";
        $myclave = mysqli_query($conex,$sql);
        $nmyclave = mysqli_num_rows($myclave);
          //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo.
            if($nmyclave != 0){
                session_start();
               //Guardamos dos variables de sesión que nos auxiliará para saber si se está o no "logueado" un usuario
                $_SESSION["autentica"] = "SIP";
                $_SESSION['rol'] = "4DM!N";
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
                ?> 
                    echo "<script>
                            alert('UPS, something went wrong!');
                            window.location= '../html/loginForm.php'
                        </script>";
                <?php
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
