<DOCTYPE html>
<html>

<head>
<meta charset="UTF-8">
<title>Welcome to Culinary</title>
</head>


<body>
<header><H1>Registraion</h1></header>
<?php 
require('database.php');

//Check if the username exist?

if(isset($_REQUEST['username'])){

    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $reg_date = date("Y-m-d H:i:s"); 
    
    //Prepare the insert query
    $query = "INSERT INTO `users` (Username, email, Password, RegistrationDate) 
    VALUES('$username', '$email', '".md5($password)."', '$reg_date')";

    $result = mysqli_query($con,$query);

    if($result){
        echo "<div class='form'>
        <h3>Registered successful.</h3>
        <br/><a href='login.php'>Login</a>";
    }

}else{
    //First time 
?>
    <div name="form"> 
    <h2>Registration Page</h2>
    <form action="" method="Post" name="registration">
        Name:<input type="text" name="username" required><br/>
        Email:<input type="Email" name="email" required><br/>
        Password:<input type="text" name="password" required><br/>
        <input type="submit" name="btn_submit" value="Register"> 
    </form>
</div>

<?php } ?>

</body>

</html>
