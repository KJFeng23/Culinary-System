<?php 

session_start();

if(session_destroy()){
    heade("Location:login.php");
    exit();
}

?>