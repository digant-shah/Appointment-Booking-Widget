<?php 
include('config.php');
session_start();		
$date1 = $_POST['date1'];
$cid = $_SESSION['cid'];
//echo $date1;

$s = "SELECT * FROM calendar_setting1 WHERE client_id = '$cid'";
$q = mysql_query($s);
$r = mysql_fetch_array($q);
$t = $r['timezone'];

$_SESSION['t'] = $t;


$tzone = $_SESSION['tzone'];
$t = $_SESSION['t'] ;








date_default_timezone_set($t);	


$date = date('Y-m-d', strtotime($date1));

if(isset($_POST['tz']))
{
$tz = $_POST['tz'];
$_SESSION['tzone'] = $tz;
}
else{
$tz = "UTC";
}
//echo $date;	#https://crm.zoho.com/crm/private/xml/Events/getSearchRecords?authtoken=#token#&scope=crmapi&selectColumns=All&searchCondition=(Start%20DateTime|%3E|2014-06-17%2000:00:00)    Search Records.......
 		# $ch = curl_init('https://crm.zoho.com/crm/private/json/Events/getRecords?authtoken=b6edaf10355ea01a7e26da56265afb63&scope=crmapi');
/*		  $ch = curl_init('https://crm.zoho.com/crm/private/json/Events/getSearchRecords?authtoken=#token#&scope=crmapi&selectColumns=All&searchCondition=(Start%20DateTime|%3E|'.$date.'%2000:00:00)');
  curl_setopt($ch, CURLOPT_VERBOSE, 1);//standard i/o streams 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// Turn off the server and peer verification 
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Set to return data to string ($response) 
 // curl_setopt($ch, CURLOPT_POST, 1);//Regular post 
 
  $response = curl_exec($ch); 
  curl_close($ch);
  
  $decode = json_decode($response,true);
 // print_r($decode);

 
	
	$users = $decode['response']['result']['Events']['row'];
	//print_r($users);

foreach($users as $us)
{
//echo $us['FL'][3]['content']." ".$us['FL'][4]['content']." to ".$us['FL'][12]['content'].'<br>';

//print_r($us['FL'][3]['content']);
$details  = $us['FL'];


for($i = 0, $l = count($details); $i < $l; ++$i) {
if ($details[$i]['val'] == "Subject")
		{ //echo $details[$i]['content'].' '; 
		$name = $details[$i]['content'];
		}
		
	if ($details[$i]['val'] == "Start DateTime")
		{ //echo $details[$i]['content'].' to '; 
		$start = $details[$i]['content'];
		
		$st = date('Y-m-d',strtotime($start));
		}
		
		if ($details[$i]['val'] == "End DateTime")
		{ //echo $details[$i]['content'].'<br>'; 
		$end = $details[$i]['content'];
		}	
		
		
		
}
if($st == $date)
{
$sql = "INSERT INTO events(event_name,start_date,end_date) VALUES('$name','$start','$end')";
		$query = mysql_query($sql);
}
} */

$sql_select = "SELECT * FROM events WHERE date(start_date) = '$date'"; 
$query_select = mysql_query($sql_select);
while($row = mysql_fetch_array($query_select))
{

//echo $row['event_name'].' ';
//echo $row['start_date'].'<br>';
$str = $row['start_date'];
$time1 =  date('H:i',strtotime($str)).'<br>';
//echo $row['end_date'].'<br>';

?>
							
	
<?php
}
//$sql_time = "SELECT timeinterval FROM  `event_interval` LEFT JOIN  `events` ON event_interval.timeinterval = TIME( events.start_date ) WHERE events.event_id IS NULL GROUP BY  `timeinterval` ";
$day = date('D', strtotime($date));
$daynum = date("w", strtotime($day));
//echo $daynum;
$sql_time = "SELECT * FROM  `event_interval` WHERE client_id = '$cid' AND day_id = '$daynum' AND timeinterval NOT IN (SELECT TIME( start_date ) FROM events WHERE DATE( start_date ) =  '$date' AND client_id = '$cid')GROUP BY  `timeinterval`";
//print_r("SELECT * FROM  `event_interval1` WHERE day_id = '$daynum' AND timeinterval NOT IN (SELECT TIME( start_date ) FROM EVENTS WHERE DATE( start_date ) =  '$date')GROUP BY  `timeinterval`");
$query_time = mysql_query($sql_time);
while($row_time = mysql_fetch_array($query_time))
{
$time_display = $row_time['timeinterval'];
$time_display1 = date('h:iA',strtotime($time_display.$tz));


 //$tz = $t; //'Asia/Kolkata'; //our timezone
	 $time1 = $time_display; //"07:00:30"; //time according to server time zone
	
			$userTimezonePreference = $tz;
			$storedDateTimeAsUtc    = $time1;
			$dateTime = new DateTime($storedDateTimeAsUtc, new DateTimeZone($tzone));   //server time zone
			//echo 'ORIG: ', $dateTime->format('H:i:s');
			$dateTime->setTimezone(new DateTimeZone($userTimezonePreference));
			$time_save = $dateTime->format('H:i:s');
			
				$final1 =  date('h:i A',strtotime($time_save));



?>
 <label>
 <input type="radio" value="<?php echo $final1; ?>" name="event[]" class="chk" onclick="countCheckedBoxes1(this)">&nbsp;&nbsp;<?php echo $final1; ?> 
</label>&nbsp;&nbsp;&nbsp;
<?php
}
 
#mysql_query('DELETE FROM events');  onclick function countCheckedBoxes(this)

?>

<!--<script>
   $("input[type=checkbox]").change(function() {
    var chkval = $(this).val();
	if (this.checked) {
    $li = $(' <label></label>');
    $li.text(this.value);
    $('#bread').append($li);
  }
   
   else{
    $('label:contains('+this.value+')', '#bread').remove();
  // $('#bread').remove(chkval);
   }
});
   </script>-->