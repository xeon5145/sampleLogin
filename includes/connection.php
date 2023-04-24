<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "samplelogin";
$sl_conn = mysqli_connect($servername,$username,$password,$db);
//checking connection
if ($sl_conn->connect_error)
{
die("Unable to Connect database: " .$sl_conn->connect_error);
}

