<?php

require_once('../connection/connections.php');
$con = connection();
$id = "0";
$name="";
$address ="";
$update = false;

    if(isset($_POST['edit'])){
    $id = $_POST['id-edit'];
    $update = true;
    $sql = "SELECT * FROM data WHERE id='$id'";
   $total = $con->query($sql) or die ($con->error);
    
    if($total->num_rows){
        $row = $total->fetch_array();
        $name = $row['fullname'];
        $address = $row['address'];
    };

};

   
