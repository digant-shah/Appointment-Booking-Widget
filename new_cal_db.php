<?php

include('config.php');


//mysql_query("TRUNCATE TABLE event_interval1");



$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);


  if ($_FILES["file"]["error"] > 0) {
   // echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
   // echo "Upload: " . $_FILES["file"]["name"] . "<br>";
   // echo "Type: " . $_FILES["file"]["type"] . "<br>";
   // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
   // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    //if (file_exists("uploads/" . $_FILES["file"]["name"])) {
     // echo $_FILES["file"]["name"] . " already exists. ";
    //} else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	  $img = $_FILES["file"]["name"];
    //}
  }







$uname = $_POST['username'];
$pwd = $_POST['password'];

$hr = $_POST['time_hour'];
$min = $_POST['time_min'];




$tz = $_POST['tz'];
$r_url = $_POST['r_url'];
$thanku = $_POST['thanku'];
$z_key = $_POST['z_key'];
$cname = $_POST['cname'];
$cname2 = $_POST['cname2'];
$col = $_POST['col'];
$namecol = $_POST['namecol'];
$namecol2 = $_POST['namecol2'];
$insert = "INSERT INTO calendar_setting1(username,password,time_slot_hr,time_slot_min,timezone,redirect_url,z_key,thanku_message,img,cname,cname2,header_color,namecol,namecol2) VALUES ('$uname','$pwd','$hr','$min','$tz','$r_url','$z_key','$thanku','$img','$cname','$cname2','$col','$namecol','$namecol2')";
mysql_query($insert);

$query_select = "SELECT * FROM calendar_setting1 ORDER BY client_id desc LIMIT 1";
$q = mysql_query($query_select);
$row = mysql_fetch_array($q);
$cid = $row['client_id'];


########monday##################
$startm = $_POST['m1'];
$endm = $_POST['m2'];
$m = $_POST['m3'];
$start1 = date('H:i:s',strtotime($startm));
$end1 = date('H:i:s',strtotime($endm));
if($m == null)
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('1','$start1','$end1','0','$cid')";
mysql_query($update);

$tStart1 = strtotime($start1);
$tEnd1 = strtotime($end1);
$tNow1 = $tStart1;

while($tNow1 <= $tEnd1){
 $d1 = date("H:i:s",$tNow1);
$sql = "INSERT INTO event_interval(timeinterval,day_id,client_id) VALUES ('$d1','1','$cid')";
mysql_query($sql);
// echo date("H:i:s",$tNow1)."<br>";
  $tNow1 = strtotime('+'.$hr.'hour '.$min.'minutes',$tNow1);
}
}
else
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('1','$start1','$end1','1','$cid')";
mysql_query($update);
}

##########tuesday#################
$startt = $_POST['t1'];
$endt = $_POST['t2'];
$t = $_POST['t3'];
$tStart1 = strtotime($startt);
$tEnd1 = strtotime($endt);
if($t == null)
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('2','$start1','$end1','0','$cid')";
mysql_query($update);
$tStart2 = strtotime($start1);
$tEnd2 = strtotime($end1);
$tNow2 = $tStart2;

while($tNow2 <= $tEnd2){
 $d2 = date("H:i:s",$tNow2);
$sql = "INSERT INTO event_interval(timeinterval,day_id,client_id) VALUES ('$d2','2','$cid')";
mysql_query($sql);
 //echo date("H:i:s",$tNow)."<br>";
  $tNow2 = strtotime('+'.$hr.'hour '.$min.'minutes',$tNow2);
}
}
else
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('2','$start1','$end1','1','$cid')";
mysql_query($update);
}

###########wednesday###############
$startm = $_POST['w1'];
$endm = $_POST['w2'];
$w = $_POST['w3'];
$start1 = date('H:i:s',strtotime($startm));
$end1 = date('H:i:s',strtotime($endm));
if($w == null)
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('3','$start1','$end1','0','$cid')";
mysql_query($update);
$tStart1 = strtotime($start1);
$tEnd1 = strtotime($end1);
$tNow1 = $tStart1;

while($tNow1 <= $tEnd1){
 $d1 = date("H:i:s",$tNow1);
$sql = "INSERT INTO event_interval(timeinterval,day_id,client_id) VALUES ('$d1','3','$cid')";
mysql_query($sql);
 //echo date("H:i:s",$tNow)."<br>";
  $tNow1 = strtotime('+'.$hr.'hour '.$min.'minutes',$tNow1);
}
}
else
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('3','$start1','$end1','1','$cid')";
mysql_query($update);
}


##############thursday############
$startm = $_POST['th1'];
$endm = $_POST['th2'];
$th = $_POST['th3'];
$start1 = date('H:i:s',strtotime($startm));
$end1 = date('H:i:s',strtotime($endm));
if($th == null)
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('4','$start1','$end1','0','$cid')";
mysql_query($update);
$tStart1 = strtotime($start1);
$tEnd1 = strtotime($end1);
$tNow1 = $tStart1;

while($tNow1 <= $tEnd1){
 $d1 = date("H:i:s",$tNow1);
$sql = "INSERT INTO event_interval(timeinterval,day_id,client_id) VALUES ('$d1','4','$cid')";
mysql_query($sql);
 //echo date("H:i:s",$tNow)."<br>";
  $tNow1 = strtotime('+'.$hr.'hour '.$min.'minutes',$tNow1);
}
}
else
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('4','$start1','$end1','1','$cid')";
mysql_query($update);
}

###########friday##############
$startm = $_POST['f1'];
$endm = $_POST['f2'];
$f = $_POST['f3'];
$start1 = date('H:i:s',strtotime($startm));
$end1 = date('H:i:s',strtotime($endm));
if($f == null)
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('5','$start1','$end1','0','$cid')";
mysql_query($update);
$tStart1 = strtotime($start1);
$tEnd1 = strtotime($end1);
$tNow1 = $tStart1;

while($tNow1 <= $tEnd1){
 $d1 = date("H:i:s",$tNow1);
$sql = "INSERT INTO event_interval(timeinterval,day_id,client_id) VALUES ('$d1','5','$cid')";
mysql_query($sql);
 //echo date("H:i:s",$tNow)."<br>";
  $tNow1 = strtotime('+'.$hr.'hour '.$min.'minutes',$tNow1);
}
}
else
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('5','$start1','$end1','1','$cid')";
mysql_query($update);
}
############saturday############
$startm = $_POST['s1'];
$endm = $_POST['s2'];
$s = $_POST['s3'];
$start1 = date('H:i:s',strtotime($startm));
$end1 = date('H:i:s',strtotime($endm));
if($s == null)
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('6','$start1','$end1','0','$cid')";
mysql_query($update);
$tStart1 = strtotime($start1);
$tEnd1 = strtotime($end1);
$tNow1 = $tStart1;

while($tNow1 <= $tEnd1){
 $d1 = date("H:i:s",$tNow1);
$sql = "INSERT INTO event_interval(timeinterval,day_id,client_id) VALUES ('$d1','6','$cid')";
mysql_query($sql);
 //echo date("H:i:s",$tNow)."<br>";
  $tNow1 = strtotime('+'.$hr.'hour '.$min.'minutes',$tNow1);
}
}
else
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('6','$start1','$end1','1','$cid')";
mysql_query($update);
}

###########sunday##############
$startm = $_POST['su1'];
$endm = $_POST['su2'];
$su = $_POST['su3'];
$start1 = date('H:i:s',strtotime($startm));
$end1 = date('H:i:s',strtotime($endm));
if($su == null)
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('0','$start1','$end1','0','$cid')";
mysql_query($update);
$tStart1 = strtotime($start1);
$tEnd1 = strtotime($end1);
$tNow1 = $tStart1;

while($tNow1 <= $tEnd1){
 $d1 = date("H:i:s",$tNow1);
$sql = "INSERT INTO event_interval(timeinterval,day_id,client_id) VALUES ('$d1','0','$cid')";
mysql_query($sql);
 //echo date("H:i:s",$tNow)."<br>";
  $tNow1 = strtotime('+'.$hr.'hour '.$min.'minutes',$tNow1);
}
}
else
{
$update = "INSERT INTO calendar_settings(day_id, start_time , end_time, block, client_id) VALUES ('0','$start1','$end1','1','$cid')";
mysql_query($update);
}



?>
<script>
//alert('Configured');
location.href='viewcal.php';
</script>