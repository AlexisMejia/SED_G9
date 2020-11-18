<?php
include("../php/lock.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/principalFormStyle.css" rel="stylesheet" type="text/css">
    <title>Create</title>
</head>
<body>
<form method="POST" id="airportID">
        <h2>Hello welcome to Aeropuerto Internacional de Soyapango.<br>
        Below is a form to take your traveler information, please fill it out </h2>
        <fieldset id="fs">
            <legend>
                User Form
            </legend>
            Passport Number:  <input type="text" name="pssN" placeholder="Passport Number"/><br>
            Name:  <input type="text" name="names"placeholder="Name"/><br>
            Age: <input type="number" name="age" placeholder="##"/><br>
            Citizenship: <input type="text" name="citizen" placeholder="ES"/><br>
            Phone number: <input type="text" name="phone" placeholder="000000"><br>
        </fieldset>
        <fieldset id="fs">
            <legend>
                Flight Form
            </legend>
            From:<input type="text" name="cFrom" placeholder=""/><br>
            To:<input type="text" name="cTo" placeholder=""><br>
            Date:<input type="date" name="dateF" placeholder=""><br>
            Time:<input type="time" name="timeF" placeholder="00:00:00"/><br>
        </fieldset>
        <fieldset id="fs">
            <legend>
                Ticket Form
            </legend>
            Seat:<input type="text" name="seat" placeholder="Seat"/><br>
            Price: <input type="number" min="0.00" max="10000.00" step="0.01" name="price" placeholder="$0.00"/><br>
            Class: <input type="text" name="class" placeholder="Class"/><br>
            User:<input  type="hidden" name="user" value="implode($_SESSION['usuarioactual']);"/><br>
        </fieldset>
        <input type="submit" name="registerF" value="Save"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>