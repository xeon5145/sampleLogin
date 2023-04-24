<?php
require_once "../config.php";
session_start();

// getting the form variables
$username = $_POST['username'];
$pwd = encpwd($_POST['password']);
$loginStatus=1;
// getting the form variables

// getting the users from database
$getUser = "SELECT * FROM users where username = '$username' AND password = '$pwd'";
$resgetUser = getSelect($sl_conn,$getUser,'array');
$rowgetUser = count($resgetUser);
// getting the users from database

// if ($rowgetUser == 1)
//  {
//     $loginStatus = 1;
//     $_SESSION["loggedInUser"] = $resgetUser[0]['firstname']." ".$resgetUser[0]['lastname'];
// }
// else
// {
//     $loginStatus = 0;
// }

echo $loginStatus;
?>