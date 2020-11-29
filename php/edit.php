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
    $query = "SELECT * FROM cliente where id=$id";
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

    $query = "UPDATE cliente set passp_user = '$pssN', name_user = '$name',age_user='$age',citi_user='$citiz',
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
            Passport Number:  <input type="text" value="<?php echo $pssN; ?>" maxlength="20" name="pssN" placeholder="Passport Number" required/><br>
            Name:  <input type="text" value="<?php echo $name; ?>"  maxlength="20" name="names"placeholder="Name" required/><br>
            Age: <input type="number" value="<?php echo $age; ?>" min="0" max="80" name="age" placeholder="##" required/><br>
            Citizenship: <input type="text" value="<?php echo $citiz; ?>" maxlength="20" name="citizen" placeholder="ES" required/><br>
            Phone number: <input type="text" value="<?php echo $phone; ?>" maxlength="20" name="phone" placeholder="000000" required><br>
        </fieldset>
        <fieldset id="fs">
            <legend>
                Flight Form
            </legend>
            From:<input type="text" value="<?php echo $from; ?>" maxlength="20" name="cFrom" placeholder="" required/><br>
            To:<input type="text" value="<?php echo $to; ?>" maxlength="20" name="cTo" placeholder="" required><br>
            Date:<input type="date" value="<?php echo $date; ?>" maxlength="20" name="dateF" placeholder="" required><br>
            Time:<input type="time" value="<?php echo $time; ?>" maxlength="20" name="timeF" placeholder="00:00:00" required/><br>
        </fieldset>
        <fieldset id="fs">
            <legend>
                Ticket Form
            </legend>
            Seat:<input type="text" value="<?php echo $seat; ?>" maxlength="20" name="seat" placeholder="Seat"required/><br>
            Price: <input type="number" value="<?php echo $price; ?>" maxlength="20" min="0.00" max="10000.00" step="0.01" name="price" placeholder="$0.00" required/><br>
            Class: <input type="text" value="<?php echo $class; ?>" maxlength="20" name="class" placeholder="Class" required/><br>

        </fieldset>
        <input type="submit" name="update" value="Update"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>