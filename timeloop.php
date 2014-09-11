<?php

include('config.php');



$cid = $_POST['cid'];
mysql_query("DELETE FROM `event_interval` WHERE `client_id` = '$cid'");

$hr = $_POST['time_hour'];
$min = $_POST['time_min'];

########monday##################
$startm = $_POST['m1'];
$endm = $_POST['m2'];
$m = $_POST['m3'];
$start1 = date('H:i:s',strtotime($startm));
$end1 = date('H:i:s',strtotime($endm));
if($m == null)
{
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '0' WHERE day_id = 1 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '1' WHERE day_id = 1 and client_id = '$cid' ";
mysql_query($update);
}


##########tuesday#################
$startt = $_POST['t1'];
$endt = $_POST['t2'];
$t = $_POST['t3'];
$start2 = date('H:i:s',strtotime($startt));
$end2 = date('H:i:s',strtotime($endt));
if($t == null)
{
$update = "UPDATE calendar_settings SET start_time = '$start2', end_time = '$end2', block = '0' WHERE day_id = 2 and client_id = '$cid' ";
mysql_query($update);
$tStart2 = strtotime($start2);
$tEnd2 = strtotime($end2);
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
$update = "UPDATE calendar_settings SET start_time = '$startt', end_time = '$endt', block = '1' WHERE day_id = 2 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '0' WHERE day_id = 3 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '1' WHERE day_id = 3 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '0' WHERE day_id = 4 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '1' WHERE day_id = 4 and client_id = '$cid' ";
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

$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '0' WHERE day_id = 5 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '1' WHERE day_id = 5 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '0' WHERE day_id = 6 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '1' WHERE day_id = 6 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '0' WHERE day_id = 0 and client_id = '$cid' ";
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
$update = "UPDATE calendar_settings SET start_time = '$start1', end_time = '$end1', block = '1' WHERE day_id = 0 and client_id = '$cid' ";
mysql_query($update);
}


$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);

  if ($_FILES["file"]["error"] > 0) {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
  } else {
  //  echo "Upload: " . $_FILES["file"]["name"] . "<br>";
   // echo "Type: " . $_FILES["file"]["type"] . "<br>";
   // echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
   // echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
    if (file_exists("uploads/" . $_FILES["file"]["name"])) {
     // echo $_FILES["file"]["name"] . " already exists. ";
    } else {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "uploads/" . $_FILES["file"]["name"]);
      //echo "Stored in: " . "uploads/" . $_FILES["file"]["name"];
	  $img = $_FILES["file"]["name"];
    }
  }



$tz = $_POST['tz'];
$r_url = $_POST['r_url'];
$thanku = $_POST['thanku'];
$zkey = $_POST['z_key'];
$cname = $_POST['cname'];
$cname2 = $_POST['cname2'];
$col = $_POST['col'];
$cncol = $_POST['namecol'];
$cncol2 = $_POST['namecol2'];
if($img == "")
{
$img = $_POST['img1'];
}
$update = "UPDATE calendar_setting1 SET timezone = '$tz', redirect_url = '$r_url', thanku_message = '$thanku', time_slot_hr='$hr', time_slot_min='$min', z_key = '$zkey', cname = '$cname', cname2 = '$cname2', img = '$img', header_color = '$col' , namecol='$cncol',namecol2='$cncol2' WHERE client_id = '$cid'";
mysql_query($update);

?>
<script>
//alert('Configured');
location.href='viewcal.php';
</script>