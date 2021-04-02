<?php

require_once('../connection/connections.php');
$con = connection();

    if(isset($_POST['delete'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM data WHERE id='$id'";
    $con->query($sql) or die ($con->error);

echo '<style>.alert-delete { display:block;}</style>';
};
