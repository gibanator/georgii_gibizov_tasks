<?php

$serv_name = "db";
$username = "ggibizov";
$password ="password";
$dbname = "ggibizov";

$conn = new mysqli ($serv_name, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed: " . $conn->connnect_error);
}

?>