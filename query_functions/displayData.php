<?php
require_once('../connection/connections.php');
$con = connection();

$sql = "SELECT * FROM data";
$findData = $con->query($sql) or die ($con->error);