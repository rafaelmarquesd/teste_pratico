<?php

$host = "107.180.57.185";
$user = "dz_dev";
$password = "p?%3DY?#*LBW";
$db = "dz_dev_test";

$mysqli = new mysqli($host, $user, $password, $db);

$error = $mysqli -> connect_errno;

if($error) echo "Connection failed: (".$error.") ".$error;

?>