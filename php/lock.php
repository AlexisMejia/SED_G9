<?php

session_start();

if($_SESSION["autentica"] != "SIP" || $_SESSION['rol'] != "4DM!N"){
    ?> 
    echo "<script>
                alert('Ingresa primero');
                window.location= '../html/loginForm.php'
        </script>";
    <?php
    die();
}

?>