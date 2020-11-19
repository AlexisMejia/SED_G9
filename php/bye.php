<?php
session_start();
session_destroy();
    ?>
    echo "<script>
        alert('Bye!');
        window.location = '../html/loginForm.php'
        </script>";
    <?php
?>