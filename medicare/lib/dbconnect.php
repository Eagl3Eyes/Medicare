<?php
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="medicare";

$connectdb = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

if($connectdb -> connect_error){
    die($connectdb -> error );
}
else{
   
}
 
?>