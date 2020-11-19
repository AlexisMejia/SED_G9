<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Login</title>
</head>
<body>
    <form action="../php/login.php" method="POST">
        <h1>Welcome</h1>
        <input type="email" name="user" maxlength="40"  placeholder="User" required/>
        <input type="password" name="pswd" min="8" maxlength="16" placeholder="******" 
        pattern="^(?=.*\d)(?=.*[\u0021-\u002b\u003c-\u0040])(?=.*[A-Z])(?=.*[a-z])\S{8,16}$*" title="A valid password is a set of characters, each consisting of an upper or lower case letter, or a digit.
        The password must begin with a letter and contain at least one digit" required>
        <input type="submit" name="register" value="Enter"/>
    </form>
</body>
</html>
