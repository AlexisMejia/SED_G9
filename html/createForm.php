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
            Passport Number:  <input type="text" name="pssN" maxlength="20" placeholder="Passport Number" required/><br>
            Name:  <input type="text" name="names" maxlength="20" placeholder="Name" required/><br>
            Age: <input type="number" name="age" min="0" max="80" maxlength="20" placeholder="##" required/><br>
            Citizenship: <input type="text" maxlength="20" name="citizen" placeholder="ES" required/><br>
            Phone number: <input type="text"  maxlength="20" name="phone" placeholder="000000" required><br>
        </fieldset>
        <fieldset id="fs">
            <legend>
                Flight Form
            </legend>
            From:<input type="text" maxlength="20" name="cFrom" placeholder="" required/><br>
            To:<input type="text" maxlength="20" name="cTo" placeholder="" required><br>
            Date:<input type="date" maxlength="20" name="dateF" placeholder="" required><br>
            Time:<input type="time" maxlength="20" name="timeF" placeholder="00:00:00" required/><br>
        </fieldset>
        <fieldset id="fs">
            <legend>
                Ticket Form
            </legend>
            Seat:<input type="text" maxlength="20" name="seat" placeholder="Seat" required/><br>
            Price: <input type="number" min="0.00" max="10000.00" step="0.01" maxlength="20" name="price" placeholder="$0.00" required/><br>
            Class: <input type="text" name="class" maxlength="20" placeholder="Class" required/><br>
        </fieldset>
        <input type="submit" name="registerF" value="Save"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>