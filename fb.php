<?php
//$t = $row['start_time'];

include('config.php');


$s = "SELECT * FROM calendar_setting1 WHERE client_id = 6";
$q = mysql_query($s);
$r = mysql_fetch_array($q);
echo $t = $r['timezone'];


			$time1 = "12:08:00";
			$tz = 'Asia/Calcutta';
			//$tz = $_POST['tz'];
			$userTimezonePreference = $tz;  //time will be saved in EST in database.
			$storedDateTimeAsUtc    = $time1;
			$dateTime = new DateTime($storedDateTimeAsUtc, new DateTimeZone($t));
			//echo 'ORIG: ', $dateTime->format('H:i:s');
			$dateTime->setTimezone(new DateTimeZone($userTimezonePreference));
			$time_save = $dateTime->format('H:i:s');
			echo $time_save;


?>
