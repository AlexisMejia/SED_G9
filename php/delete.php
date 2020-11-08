<?php 
include("db_cnt.php");

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM form2 WHERE id = $id";
    $result = mysqli_query($conex, $query);
    if($result) {
        ?>
        echo "<script>
            alert('Dato borrado con exito');
            window.location='index.php'
            </script>"
        <?php 
    }else{
        ?>
        echo "<script>
            alert('Algo salio mal, intentelo de nuevo');
            window.location='index.php'
            </script>"
        <?php 
    }
}

?>