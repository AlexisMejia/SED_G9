<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/principalFormStyle.css" rel="stylesheet" type="text/css">
    <title>Flight Form</title>
</head>
<body>
<form method="POST" id="airportID">
        <h2>Hello welcome to Aeropuerto Internacional de Soyapango.<br>
        Below is a form to take your traveler information, please fill it out </h2>
        <fieldset id="fs">
            <legend>
                Flight Form
            </legend>
            From:<input type="text" name="cFrom" placeholder=""/><br>
            To:<input type="text" name="cTo" placeholder=""><br>
            Date:<input type="date" name="dateF" placeholder=""><br>
            Time:<input type="number" name="timeF" placeholder=""/><br>
        </fieldset>
        <input type="submit" name="registerF" value="Confirm Flight"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>