<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <form method="POST">
        <h1>Welcome</h1>
        <input type="text" name="user" placeholder="User"/>
        <input type="text" name="password" placeholder="******">
        <input type="submit" name="register" value="Enter"/>
    </form>
    <?php
    include("../php/register.php");
    ?>
</body>
</html>