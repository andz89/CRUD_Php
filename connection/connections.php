<?php
function connection(){

    $host = "localhost";
    $username = "root";
    $password = "288647";
    $database = "crud_php";
    $con = new mysqli($host, $username, $password, $database);
    
    if($con->connect_error){
        echo $con->connect_error;
    }else{
        return $con;
    }
    
    }

//submit data
require_once('../query_functions/submitData.php');

//delete data
require_once('../query_functions/delete.php');

//edit data
require_once('../query_functions/edit.php');

//update data
require_once('../query_functions/update.php');

//find and display data
require_once('../query_functions/displayData.php');


?>

