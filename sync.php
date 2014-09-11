<?php 
include('config.php');
echo $cid = $_POST['cid'];
echo $z_key = $_POST['z_key'];
#https://crm.zoho.com/crm/private/xml/Events/getSearchRecords?authtoken=b6edaf10355ea01a7e26da56265afb63&scope=crmapi&selectColumns=All&searchCondition=(Start%20DateTime|%3E|2014-06-17%2000:00:00)    Search Records.......
 		# $ch = curl_init('https://crm.zoho.com/crm/private/json/Events/getRecords?authtoken=b6edaf10355ea01a7e26da56265afb63&scope=crmapi');
		$date = date('Y-m-d');
		mysql_query("DELETE from events WHERE date(start_date) > '$date' AND client_id = '$cid'");
$ch = curl_init('https://crm.zoho.com/crm/private/json/Events/getSearchRecords?authtoken='.$z_key.'&scope=crmapi&selectColumns=All&searchCondition=(Start%20DateTime|>|'.$date.')');
  curl_setopt($ch, CURLOPT_VERBOSE, 1);//standard i/o streams 
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);// Turn off the server and peer verification 
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//Set to return data to string ($response) 
 // curl_setopt($ch, CURLOPT_POST, 1);//Regular post 
 
  $response = curl_exec($ch); 
  curl_close($ch);
  
  $decode = json_decode($response,true);
  print_r($decode);

 
	
	$users = $decode['response']['result']['Events']['row'];
	//print_r($users);

foreach($users as $us)
{
//echo $us['FL'][3]['content']." ".$us['FL'][4]['content']." to ".$us['FL'][12]['content'].'<br>';

//print_r($us['FL'][3]['content']);
$details  = $us['FL'];


for($i = 0, $l = count($details); $i < $l; ++$i) {
if ($details[$i]['val'] == "Subject")
		{ echo $details[$i]['content'].' '; 
		$name = $details[$i]['content'];
		}
		
	if ($details[$i]['val'] == "Start DateTime")
		{ echo $details[$i]['content'].' to '; 
		$start = $details[$i]['content'];
		
		$st = date('Y-m-d',strtotime($start));
		}
		
		if ($details[$i]['val'] == "End DateTime")
		{ echo $details[$i]['content'].'<br>'; 
		$end = $details[$i]['content'];
		}	
		
		
		
}
$sql = "INSERT INTO events(event_name,start_date,end_date,client_id) VALUES('$name','$start','$end','$cid')";
		$query = mysql_query($sql);

}