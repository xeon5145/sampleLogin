<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "sampleLogin";
$p_conn = mysqli_connect($servername,$username,$password,$db);
//checking connection
if ($sl_conn->connect_error)
{
die("Unable to Connect database: " .$sl_conn->connect_error);
}

