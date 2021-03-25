<?php include "database.php" ?>
<?php
if(isset($_POST['a_submit'])){
    $name=$_POST['a_name'];
    $email=$_POST['a_email'];
    $password=$_POST['a_password'];
    $hash=md5($password);
    $confirmpassword=$_POST['a_confirm_password'];
    if($password==$confirmpassword){
        $sql="INSERT INTO `admin` (`a_name`, `a_email`, `a_password`) VALUES ('$name', '$email', '$hash');";
        mysqli_query($conn,$sql);
        echo "Insertion Successfull";
    }else{
        echo "Insertion Unsuccessfull";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Css/Registration.css">
</head>

<body>

    <form action="Registration.php"method="post" class="container">
        <h3>Register as Admin</h3>

        <b>Name:</b><br><input type="text" name="a_name" id="a_name" placeholder="Enter Your Name " required><br>
        <b>Email:</b><br><input type="email" name="a_email" id="a_email" placeholder="Enter Your Email" required><br>
        <b>Password:</b><br><input type="password" name="a_password" id="a_password" placeholder="Enter Your Password" required><br>
        <b>Confirm password:</b><br><input type="password" name="a_confirm_password" id="a_confirm_password" placeholder="Enter Your Confirm Password" required><br>
        <input type="submit" name="a_submit" value="Submit">
        <a href="index.php">Already Have an Account?</a>
    </form>

</body>

</html>