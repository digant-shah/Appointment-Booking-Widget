<?php
include('config.php');
//echo $_GET['id'].'<br>';
//echo $_GET['recieved_at'].'<br>';
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$email = $_GET['email_text'];
$phn = $_GET['phone_text'];
$add = $_GET['address_text'];
$city = $_GET['city_text'];
$state = $_GET['state_text'];
$zip = $_GET['zip_text'];
$desc = $_GET['description_text'];
//echo $_GET['custom_1_text'].'<br>';
//echo $_GET['custom_2_text'].'<br>';
//echo $_GET['custom_3_text'].'<br>';
//echo $_GET['custom_4_text'].'<br>';
//echo $_GET['custom_5_text'];



$sql = "insert into leads(fname,lname,email,phone,address,city,state,zip,descr) values ('$fname','$lname','$email','$phn','$add','$city','$state','$zip','$desc')";
$query = mysql_query($sql);















?>