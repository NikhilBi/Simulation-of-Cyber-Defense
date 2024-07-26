<?php 
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "hackthon";

    $con = mysqli_connect($server,$user,$pass,$db_name);

    if(!$con){
        die("Error!!");
    }
?>