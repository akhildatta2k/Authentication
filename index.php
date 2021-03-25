<?php include "database.php" ?>
<?php
if(isset($_POST['a_login'])){

    $name=$_POST['a_name'];
    $password=$_POST['a_password'];
    $hash=md5($password);
    $sql="SELECT * FROM `admin` WHERE `a_name`='$name' AND `a_password`='$hash';";
    $result=mysqli_query($conn,$sql) or die("Unable to Login");
    
    if(mysqli_num_rows($result)==1){
        while($row=mysqli_fetch_assoc($result)){
            session_start();
            $_SESSION["loggedin"]=true;
            $_SESSION["name"]=$name;
            header("Location: http://localhost/Authentication/welcome.php");
        }
    }else{
        echo "unable to Login";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Css/index.css">
</head>

<body>

    <form action="index.php" method="post" class="container">
        <h3>Login as Admin</h3>

        <b>Name:</b><br><input type="text" name="a_name" id="a_name" placeholder="Enter Your Username" required><br>
        <b>Password:</b><br><input type="password" name="a_password" id="a_password" placeholder="Enter Your Password" required><br>
        <input type="submit" name="a_login" value="Login"><br>
        <a href="forgot_password.php">Forgot Password?</a>
        <a href="Registration.php">Register</a>

    </form>

</body>

</html>