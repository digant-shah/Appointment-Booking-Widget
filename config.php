<?php

$con = mysql_connect('localhost','crmshopc_cal','Calendar');
if (!$con)
{
die('Could not connect: ' . mysqli_error($con));
}
mysql_select_db("crmshopc_calendar");

 
 
 
?>
