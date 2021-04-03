<?php

require_once('../connection/connections.php');
$con = connection();


    if(isset($_POST['btn-update'])){

    $id = $_POST["id"];
    $name=$_POST["name"];
    $address =$_POST["address"];
    
    $sql = "UPDATE data SET fullname='$name', address='$address' WHERE id=$id";
    $con->query($sql) or die ($con->error);
    
    $name = $row['fullname'] = "";
    $address = $row['address'] = "";
    echo '<style>.alert-update { display:block;}</style>';

    }

 


