<?php
function getSelect($sl_conn, $query, $fetchType)
{
    $queryResponse = mysqli_query($sl_conn, $query) or die($query . mysqli_error());
    $dbReturnArray = array();
    $i = 0;
    $fetchCommand = "mysqli_fetch_$fetchType";

    while (@$queryResponseRow = $fetchCommand($queryResponse)) {
        $dbReturnArray[$i] = $queryResponseRow;
        $i++;
    }

    return $dbReturnArray;
}

// password encryption function----------------
function encPwd($password)
{
  $normal_text = $password;

  $cryptStr = $normal_text;
  $encpassword = crypt($cryptStr,'$1$scallianisanothernameforonion$');

  return $encpassword;
}
// password encryption function----------------
?>