<?php 
include('config.php');
$name = $_POST['name'];
$start = date('Y-m-d H:i:s',strtotime($_POST['startdate']));
$end = date('Y-m-d H:i:s',strtotime($_POST['enddate']));
$key = $_POST['key'];
echo 'hi';
$sql = "select * from calendar_setting1 where z_key = '$key'";
$query = mysql_query($sql);
$row = mysql_fetch_array($query);
$cid = $row['client_id'];



$sql1 = "INSERT INTO events(event_name,start_date,end_date,client_id) VALUES('$name','$start','$end','$cid')";
		$query = mysql_query($sql1);
		

$myfile = fopen("newfile.txt", "a+") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $name);
$txt = "Jane Doe\n";
fwrite($myfile, $start);
fclose($myfile);		

?>

