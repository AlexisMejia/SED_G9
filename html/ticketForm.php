<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/principalFormStyle.css">
    <title>Ticket Form</title>
</head>
<body>
<form method="POST" id="airportID">
        <h2>Hello welcome to Aeropuerto Internacional de Soyapango.<br>
        Below is a form to take your traveler information, please fill it out </h2>
        <fieldset id="fs">
            <legend>
                Ticket Form
            </legend>
            Seat:<input type="text" name="seat" placeholder="Seat"/><br>
            Price: <input type="number" name="price" placeholder="$0.00"/><br>
            Class: <input type="text" name="class" placeholder="Class"/><br>
            Passport Number:  <input type="text" name="passnumber" placeholder="Passport Number"/><br>
        </fieldset>
        <input type="submit" name="registerT" value="Confirm Ticket"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>