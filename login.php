<?php 
session_start();
?>

<!DOCTYPE html>
<html>

<header>
    <meta charset="UTF-8">
    <title>Login Page</title>
</header>
<body>

<header><H1>Login</h1></header>
<?php 

require('database.php');

if(isset($_REQUEST['email'])){

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $query = "SELECT * FROM `users`
              WHERE Email = '$email'
              AND Password = '".md5($password)."'";
    
    $results = mysqli_query($con,$query) or die(mysqli_error($con));
    $row = mysqli_num_rows($results);

    if($row == 1){

        // for the authenticate user in auth.php
        $_SESSION['email'] = $email;
        header("Location:index.php");
        exit();


    }else{
        echo "<div name='form'>
        <h3>Wrong Email/Password</h3>
        <br/>Try again <a href='login.php'>Login</a>";
    }

}else{
?>

<div name="form">
    <form action="" method="post" name="login">
        Email:<input type="email" name="email" required><br/>
        Password:<input type="text" name="password" required><br/>
        <input type="submit" name="btn_submit" value="Login">
        <br/>Do not have an account register here <a href="registration.php">Register</a>
    </form>
</div>


<?php } ?>







</body>
</html>

