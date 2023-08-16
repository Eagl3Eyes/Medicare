<?php 
session_start();
if(isset($_SESSION['auther1']) || isset($_COOKIE['auther2']) ){
    session_destroy();
    if(isset($_COOKIE['auther2'])){
        setcookie('auther2', '', time()-3600, '/');
    }
    header("location:login.php");
}else{
    header("location:login.php");
}

?>