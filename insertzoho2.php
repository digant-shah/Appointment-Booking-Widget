<?php
include('config.php');
$name = $_POST['fname']." ".$_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
 $desc = $_POST['desc'];
 $startdate = $_POST['startdate'];
 $times = $_POST['times'];
session_start();
echo $cid = $_SESSION['cid'];

echo $tzone = $_SESSION['tzone'];
echo $t = $_SESSION['t'] ;
 $tz = $t; //'Asia/Kolkata'; //our timezone
	echo $time1 = $times; //"07:00:30"; //time according to server time zone
	
			$userTimezonePreference = $tz;
			$storedDateTimeAsUtc    = $time1;
			$dateTime = new DateTime($storedDateTimeAsUtc, new DateTimeZone($tzone));   //server time zone
			//echo 'ORIG: ', $dateTime->format('H:i:s');
			$dateTime->setTimezone(new DateTimeZone($userTimezonePreference));
			$time_save = $dateTime->format('H:i:s');
			
				echo $final =  date('H:i:s',strtotime($time_save));



$query = mysql_query("SELECT * from calendar_setting1 WHERE client_id = '$cid'");
								while($row = mysql_fetch_array($query))
								{ 
								$hr =  $row['time_slot_hr']; 
								$min = $row['time_slot_min'];
								$z_key = $row['z_key'];
								
								}
$time3 = date('H:i:s',strtotime($final));
//$time3;
$time4 = strtotime($time3);
$endtime1 = date("H:i:s", strtotime('+'.$hr.'hour '.$min.'minutes', $time4));

$eventname = "appointment by ".$name;
$datetime = $startdate.' '.$time3;
$endtime = $startdate.' '.$endtime1;
$sql = "INSERT INTO events(event_name,start_date,end_date,descr,phn_number,event_email,client_id) values ('$eventname','$datetime','$endtime','$desc','$phone','$email','$cid')";

mysql_query($sql);



 $ch1 = curl_init('https://crm.zoho.com/crm/private/xml/Events/insertRecords?');
  curl_setopt($ch1, CURLOPT_VERBOSE, 1);//standard i/o streams 
  curl_setopt($ch1, CURLOPT_SSL_VERIFYPEER, FALSE);// Turn off the server and peer verification 
  curl_setopt($ch1, CURLOPT_SSL_VERIFYHOST, FALSE); 
  curl_setopt($ch1, CURLOPT_RETURNTRANSFER, 1);//Set to return data to string ($response) 
  curl_setopt($ch1, CURLOPT_POST, 1);//Regular post 
  
  
  $authtoken = $z_key;
$query1 ='authtoken='.$authtoken.'&scope=crmapi&newFormat=1&xmlData=<Events><row no="1"><FL val="Subject">Appointment by:'.$name.'</FL><FL val="Start DateTime">'.$datetime.'</FL><FL val="End DateTime">'.$endtime.'</FL><FL val="Send Notification Email">True</FL><FL val="Description">Name:'.$name.', Email:'.$email.', phone:'.$phone.', Description:'.$desc.'</FL></row></Events>';

 curl_setopt($ch1, CURLOPT_POSTFIELDS, $query1);// Set the request as a POST FIELD for curl. 
  //Execute cUrl session 
 $response1 = curl_exec($ch1); 
  curl_close($ch1);
 // echo $response1;

  
  
 

 $sql = "SELECT * FROM calendar_setting1 where client_id = '$cid'";
  $query = mysql_query($sql);
  while($row = mysql_fetch_array($query))
  {
  $msg = $row['thanku_message'];
  $url = $row['redirect_url'];
  }

?>
<input type="hidden" id="msg" value="<?php echo $msg; ?>"  />
<input type="hidden" id="r_url" value="<?php echo $url; ?>" />
<script>
var ur = document.getElementById("r_url").value; 
var msg = document.getElementById("msg").value; 
alert(msg);
//window.history.back();
//window.open(ur,'_newtab');
location.href = ur;
</script>