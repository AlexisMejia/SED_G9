<?php
     /* A continuación, realizamos la conexión con nuestra base de datos en MySQL */
    $conex = mysqli_connect("localhost","root","");
    mysqli_select_db($conex,"airport");

    /* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función 
     htmlentities para evitar inyecciones SQL. */
    $myusuario = mysqli_query($conex,"select user from cliente where user =  '".htmlentities($_POST["user"])."'");
    $nmyusuario = mysqli_num_rows($myusuario);

     //Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario...
    if($nmyusuario != 0){
        $sql = "select user
                from cliente
                where estado = 1
                and user = '".htmlentities($_POST["user"])."' 
                and pssw = '".md5(htmlentities($_POST["pswd"]))."'";
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
                ?> 
                    echo "<script>
                            alert("error! $myclave ");
                            window.location= '../html/loginForm.php'
                        </script>";
                <?php
            }
        }else{
            ?> 
            echo "<script>
                    alert('usuario no encontrado!');
                    window.location= '../html/loginForm.php'
                </script>";
        <?php
        }
    mysql_close($conex);

?>
