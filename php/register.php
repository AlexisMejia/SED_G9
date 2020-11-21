<?php 
include("db_cnt.php");


//saving data from FORM to database
if(isset($_POST['registerF'])){
    if(strlen($_POST['pssN']) >= 1 && strlen($_POST['names']) >= 1 
    && strlen($_POST['age']) >= 1 && strlen($_POST['citizen']) >= 1
    && strlen($_POST['phone']) >= 1 && strlen($_POST['cFrom']) >= 1 
    &&strlen($_POST['cTo']) >= 1 && strlen($_POST['dateF']) >= 1
    && strlen($_POST['timeF']) >= 1 && strlen($_POST['seat']) >= 1 
    && strlen($_POST['price']) >= 1 && strlen($_POST['class']) >= 1){
        $pssN = trim(htmlentities($_POST['pssN']));
        $name = trim(htmlentities($_POST['names']));
        $age = trim(htmlentities($_POST['age']));
        $citiz = trim(htmlentities($_POST['citizen']));
        $phone = trim(htmlentities($_POST['phone']));
        $from = trim(htmlentities($_POST['cFrom']));
        $to = trim(htmlentities($_POST['cTo']));
        $date= trim(htmlentities($_POST['dateF']));
        $time = trim(htmlentities($_POST['timeF']));
        $seat = trim(htmlentities($_POST['seat']));
        $price = trim(htmlentities($_POST['price']));
        $class = trim(htmlentities($_POST['class']));
        $query = "INSERT INTO cliente(passp_user, name_user, age_user, citi_user, phone_user, pais_origen,pais_llegada,fecha_reg,hora_vuelo,asiento, precio,clase)
                    VALUES ('$pssN','$name','$age','$citiz','$phone','$from','$to','$date','$time','$seat','$price','$class')";
        $resultado = mysqli_query($conex,$query);

        if ($resultado) {
            ?> 
            echo "<script>
                        alert('You have registered correctly!');
                        window.location= 'index.php'
                </script>";
            <?php
        } else {
            ?>  
            echo "<script>
                        alert('UPS, something went wrong!');
                        window.location= 'createForm.php'
                </script>";
            <?php
        }
    }   else {
        ?>  
        echo "<script>
                    alert('Please fill out all the fields!');
                    window.location= 'createForm.php'
            </script>";
        <?php
    }   
}


?>



