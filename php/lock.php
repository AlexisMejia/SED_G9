<?php

session_start();

if($_SESSION["autentica"] != "SIP"){
    ?> 
    echo "<script>
                alert('Ingresa primero');
                window.location= '../html/loginForm.php'
        </script>";
    <?php
    die();
}

?>