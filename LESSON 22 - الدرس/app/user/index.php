<?php
session_start();
if(isset($_SESSION['user'])){
if($_SESSION['user']->ROLE === "USER"){
echo 'Welcome ' .$_SESSION['user']->NAME ;
}else{
    header("location:http://localhost/App/login.php",true); 
    die("");
}
}else{
    header("location:http://localhost/App/login.php",true); 
    die(""); 
}
?>