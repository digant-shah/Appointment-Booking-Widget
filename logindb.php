<?php

include('config.php');

  $name1 = $_POST['username'];
  $password = $_POST['password'];
 
 
 $sql_select = mysql_query("SELECT * from calendar_setting1 WHERE username = '$name1' AND password = '$password' limit 1");
 if (mysql_num_rows($sql_select) == 0){
 		
 echo '<script type="text/javascript">';
 echo 'alert("username password incorret");';
echo 'location.href="index.php"';
echo '</script>';
 }
 
 else
 {
while($row = mysql_fetch_array($sql_select))
			 {
			 echo $id = $row['client_id'];
 			}
			 session_start();
// store session data
$_SESSION["userid"] = $id;
// echo $_SESSION['userid'];
echo '<script type="text/javascript">';
echo 'location.href="viewcal.php"';
echo '</script>';
 }

 
 ?>