<?php include "database.php" ?>
<?php
session_start();
if($_SESSION['loggedin']!=true || !isset($_SESSION['loggedin']))
    header('Location: index.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    welcome <?php echo $_SESSION['name'] ?>
    <a href="logout.php">logout</a>
  
</body>
</html>