<?php 
// db connect
include "lib/dbconnect.php";
// data delete
if(isset($_GET['odID'])){
    $delete_id=$_GET['odID'];
    $delete_sql="DELETE FROM ourdoctortable WHERE odID=$delete_id";
    if($connectdb -> query($delete_sql)){
        header("location:doctor.php");
    }else{
        die($connectdb -> error);
    }
}else{
    header("location:doctor.php");
}
?>