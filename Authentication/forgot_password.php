<?php include "database.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="Css/forgotpassword.css">
</head>

<body>

    <form action="/" method="post" class="container">
        <h3>IF YOU FORGOT</h3>

        <b>Email:</b><input type="email" name="a_email" id="a_email" placeholder="Enter Your Email" required>
        <input type="submit" value="Submit">

        <a href="Registration.php">Register?</a>
    </form>

</body>

</html>