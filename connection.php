<?php

$servername="localhost";
$username="root";
$password="";
$dbname="fighters";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("conncetion failed" .mysqli_connect_error());
}

?>