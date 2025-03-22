<?php 

$con = mysqli_connect("localhost","root","","culinary_db");

if(mysqli_connect_errno())
{
    echo "Failed to connec to MySQL:" . mysqli_connect_error();
}

?>