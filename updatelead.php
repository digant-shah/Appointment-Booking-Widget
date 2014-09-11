<?php

include('config.php');
 $uid = $_POST['userid'];
 $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $add = $_POST['address'];
  $phn = $_POST['phone'];
  $city = $_POST['city'];
  $state= $_POST['state'];
  $zip = $_POST['zip'];
  $country = $_POST['country'];
  $desc = $_POST['desc'];
  
 
  
 
  
  $insert = "UPDATE leads SET fname = '$fname',lname = '$lname', email = '$email', phone ='$phn' , address = '$add', city ='$city', state='$state',zip='$zip', descr='$desc', country = '$country'  WHERE id = $uid";
  // Do Your Insert Query
  if(mysql_query($insert)) {
  echo "Success";
  } else {
  echo "Cannot Insert";
  }
 
 
 
 
?>

<script type="text/javascript">
location.href="viewlead.php";
</script>