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
            From:<input type="text" placeholder=""/><br>
            To:<input type="text" placeholder=""><br>
            Date:<input type="date" placeholder=""><br>
            Time:<input type="number" placeholder=""/><br>
        </fieldset>
        <input type="submit" name="register"/>
        <fieldset id="fs">
            <legend>
                User Form
            </legend>
            Passport Number:  <input type="text" placeholder="Passport Number"/><br>
            Full name:  <input type="text" placeholder="Full Name"/><br>
            Age: <input type="number" placeholder="##"/><br>
            Citizenship: <input type="text" placeholder="ES"/><br>
            Phone number: <input type="number" placeholder="000000"><br>
            Email: <input type="email" placeholder="xxxx@xxxx.xxx"><br>
        </fieldset>
        <input type="submit" name="register"/>
        <fieldset id="fs">
            <legend>
                Ticket Form
            </legend>
            Seat:<input type="text" placeholder="Seat"/><br>
            Price: <input type="number" placeholder="$0.00"/><br>
            Class: <input type="text" placeholder="Class"/><br>
            Passport Number:  <input type="text" placeholder="Passport Number"/><br>
        </fieldset>
        <input type="submit" name="register"/>
    </form>
</body>
</html>