<?php
require_once('../connection/connections.php');
$con = connection();

    if(isset($_POST['btn-submit'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
    if($name == "" || $address == ""){
  
        echo '<style>.alert-message{ display:block;}</style>';

    }else{
        $con->query("INSERT INTO data (fullname, address) VALUES('$name', '$address')") or die ($con->error);
        echo '<style>.alert-submit{ display:block;}</style>';

    }

   
   

};