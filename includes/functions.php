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
?>