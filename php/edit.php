<?php 
include("db_cnt.php");

$pssN ='';
$name =''; 
$age=''; 
$citiz ='';
$phone ='';
$from =''; 
$to ='';
$date= '';
$time = '';
$seat ='';
$price ='';
$class ='';

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query = "SELECT * FROM form2 where id=$id";
    $result = mysqli_query($conex, $query);

    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);
        
        $pssN =$row['passp_user'];
        $name =$row['name_user']; 
        $age=$row['age_user']; 
        $citiz =$row['citi_user'];
        $phone =$row['phone_user'];
        $from =$row['pais_origen'];
        $to =$row['pais_llegada'];
        $date= $row['fecha_reg'];
        $time = $row['hora_vuelo'];
        $seat =$row['asiento'];
        $price =$row['precio'];
        $class =$row['clase'];
    }
}

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $pssN = trim($_POST['pssN']);
    $name = trim($_POST['names']);
    $age = trim($_POST['age']);
    $citiz = trim($_POST['citizen']);
    $phone = trim($_POST['phone']);
    $from = trim($_POST['cFrom']);
    $to = trim($_POST['cTo']);
    $date= trim($_POST['dateF']);
    $time = trim($_POST['timeF']);
    $seat = trim($_POST['seat']);
    $price = trim($_POST['price']);
    $class = trim($_POST['class']);

    $query = "UPDATE form2 set passp_user = '$pssN', name_user = '$name',age_user='$age',citi_user='$citiz',
                phone_user='$phone',pais_origen='$from',pais_llegada='$to',fecha_reg='$date',hora_vuelo='$time',
                asiento='$seat',precio='$price',clase='$class' WHERE id=$id";
    mysqli_query($conex, $query);
    ?>
        echo "<script>
            alert('Formulario actualizado con éxito');
            window.location='../html/index.php'
            </script>"
    <?php 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/principalFormStyle.css" rel="stylesheet" type="text/css">
    <title>Update</title>
</head>
<body>
<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST" id="airportID">
        <h2>Hello welcome to Aeropuerto Internacional de Soyapango.<br>
        Below is a form to take your traveler information, please fill it out </h2>
        <fieldset id="fs">
            <legend>
                User Form
            </legend>
            Passport Number:  <input type="text" value="<?php echo $pssN; ?>" name="pssN" placeholder="Passport Number"/><br>
            Name:  <input type="text" value="<?php echo $name; ?>" name="names"placeholder="Name"/><br>
            Age: <input type="number" value="<?php echo $age; ?>" name="age" placeholder="##"/><br>
            Citizenship: <input type="text" value="<?php echo $citiz; ?>" name="citizen" placeholder="ES"/><br>
            Phone number: <input type="text" value="<?php echo $phone; ?>" name="phone" placeholder="000000"><br>
        </fieldset>
        <fieldset id="fs">
            <legend>
                Flight Form
            </legend>
            From:<input type="text" value="<?php echo $from; ?>" name="cFrom" placeholder=""/><br>
            To:<input type="text" value="<?php echo $to; ?>" name="cTo" placeholder=""><br>
            Date:<input type="date" value="<?php echo $date; ?>" name="dateF" placeholder=""><br>
            Time:<input type="time" value="<?php echo $time; ?>" name="timeF" placeholder="00:00:00"/><br>
        </fieldset>
        <fieldset id="fs">
            <legend>
                Ticket Form
            </legend>
            Seat:<input type="text" value="<?php echo $seat; ?>" name="seat" placeholder="Seat"/><br>
            Price: <input type="number" value="<?php echo $price; ?>" min="0.00" max="10000.00" step="0.01" name="price" placeholder="$0.00"/><br>
            Class: <input type="text" value="<?php echo $class; ?>" name="class" placeholder="Class"/><br>
        </fieldset>
        <input type="submit" name="update" value="Update"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>