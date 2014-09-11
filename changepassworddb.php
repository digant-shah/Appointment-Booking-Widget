<?php
include('config.php');

  
   $id = $_POST["uid"];
	
	$old_pwd = $_POST['oldpwd'];
	  
  $new_pwd = $_POST['newpwd'];
 
		  $query = mysql_query("SELECT * FROM calendar_setting1 WHERE client_id = '$id'");
		  while($row = mysql_fetch_array($query))
		  {
			$pass =  $row['password'];
		  }
				if($old_pwd == $pass)
					{
		  			mysql_query("UPDATE calendar_setting1 SET password = '$new_pwd' WHERE client_id = '$id'");
					echo "success";
		  			}
		 		 else
		 		 {
		 		 echo "Old Password Not Match";
		 		 }
	
  
?>
