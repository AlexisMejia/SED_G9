<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/principalFormStyle.css">
    <title>User Form</title>
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
        <input type="submit" name="registerF"/>
        <fieldset id="fs">
            <legend>
                User Form
            </legend>
            Passport Number:  <input type="text" name="pssN" placeholder="Passport Number"/><br>
            Names:  <input type="text" name="names"placeholder="Name"/><br>
            Surname:  <input type="text" name="surname"placeholder="Name"/><br>
            Age: <input type="number" name="age" placeholder="##"/><br>
            Citizenship: <input type="text" name="citizen" placeholder="ES"/><br>
            Phone number: <input type="number" name="phone" placeholder="000000"><br>
            Email: <input type="email" name="email" placeholder="xxxx@xxxx.xxx"><br>
        </fieldset>
        <input type="submit" name="registerU"/>
        <fieldset id="fs">
            <legend>
                Ticket Form
            </legend>
            Seat:<input type="text" name="seat" placeholder="Seat"/><br>
            Price: <input type="number" name="price" placeholder="$0.00"/><br>
            Class: <input type="text" name="class" placeholder="Class"/><br>
            Passport Number:  <input type="text" name="passnumber" placeholder="Passport Number"/><br>
        </fieldset>
        <input type="submit" name="registerT"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>