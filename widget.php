
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.0
Version: 1.5
Author: KeenThemes
Website: http://www.keenthemes.com/
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Admin Dashboard</title>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <meta name="MobileOptimized" content="320">
   <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
   <link href="assets/plugins/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
   <link href="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css"/>
   <!-- END PAGE LEVEL PLUGIN STYLES -->
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/pages/tasks.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   
     <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
   <?php include('config.php'); ?>
   <style>
   
   .page-sidebar-closed .page-content {
 margin-left: 0px !important;
}
</style>
<style>
   img.avatar {
  height: 100px;
  width: 100px;
 webkit-border-radius: 50% !important; */
     -moz-border-radius: 50% !important;
          
  border-radius: 50% !important; */
}
	}
	</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
  
  
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container1">
      
      <div class="page-content" style="margin-left:0px;">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <!-- END BEGIN STYLE CUSTOMIZER -->  
         <!-- BEGIN PAGE HEADER-->
                  <!-- END PAGE HEADER-->
				 <?php  session_start();
	  $key = $_GET['key'];
	  $_SESSION['key'] = $key;
	  $query = mysql_query("SELECT * FROM calendar_setting1 WHERE z_key = '$key'");
	  while($rw = mysql_fetch_array($query))
	  {
	  $cid = $rw['client_id'];
	  $_SESSION['cid'] = $cid;
	  $img = $rw['img'];
	  $title = $rw['cname'];
	  $subtitle = $rw['cname2'];
	  $col = $rw['header_color'];
	  $nc1 = $rw['namecol'];
	  $nc2 = $rw['namecol2'];
	  } ?>
      
		 
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         <!-- END BEGIN STYLE CUSTOMIZER -->  
         <!-- BEGIN PAGE HEADER-->
		 
		 
         <div class="row">
		
            <div class="col-md-6 col-xs-12">
			<img class="avatar pull-left" src="uploads/<?php echo $img;?>" style="margin-left:2%;" >
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
             
			  
			    
               <h3 class="page-title" style="background-color:<?php echo $col;?>; color:#FFFFFF; height:100px;">
			    
                  <span style="color:<?php echo $nc1; ?>"><br>&nbsp;&nbsp;<b><?php echo $title; ?></b><br>&nbsp;&nbsp;<font size="+1" color="<?php echo $nc2; ?>"><?php echo $subtitle; ?></font></span>
				 
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                    <!-- <i class="icon-home"></i>-->
                     <a href="#" id="bread">Appointment &nbsp;</a>
                     <!--<i class="icon-angle-right"></i>-->
                  </li>
				  <?php $query = mysql_query("SELECT * FROM calendar_setting1 WHERE client_id = '$cid'");
				  while($row = mysql_fetch_array($query))
				  {$hr = $row['time_slot_hr'];
				  $min = $row['time_slot_min'];
				 
				  } ?>
                  <span class="pull-right"><img src="uploads/clock.PNG"><?php if(isset($hr) && $hr != 0){echo $hr.' hour ';} echo $min.' minutes'; ?></span>
                 
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
         <div class="row"  >
             <div class="col-md-3 col-xs-6">	
				<h4><b>Select Your Preferred Date</b></h4>
			 </div>
         </div>	
		  <div class="row">
            <div class="col-md-3 col-xs-5">									 
				<div class="form-group">
                  <div class="col-md-3">
				  <?php $dates = date('Y-m-d',strtotime(' +1 day'));  
				  $w = date('w',strtotime($dates));
				  $sql = "SELECT * FROM calendar_settings WHERE block = 1 AND client_id = '$cid'";
				  $query  = mysql_query($sql);
				  while($row = mysql_fetch_array($query))
				  {
				  $d = $row['day_id'];
				  if($w == $d)
				  {
				 $dates = date('Y-m-d', strtotime($dates.' +1 day'));
				 $w = date('w',strtotime($dates));
				 }
				
				 }
				
				  ?>
				  <input type="text" id="datepick1" value="<?php echo $dates; ?>" style="display:none;">
				  <?php $date1 = date('m/d/Y',strtotime($dates)); 
				 $date3 =  date("D, M j Y",strtotime($date1));
				  ?>
				  <input type="text" id="datepick3" value="<?php echo $date3; ?>" style="display:none;">
				   <input type="text" id="datepick2" value="" style="display:none;">
                       <!--<input class="form-control form-control-inline input-medium date-picker" id="datepick" data-date-format="yyyy-mm-dd"  size="14" type="text" value="<?php //echo $dates; ?>" autofocus="autofocus" tabindex="1"  name="datepick" />-->
					   <div class="date-picker" id="datepick" data-date="<?php echo $date1; ?>" data-date-format="mm/dd/yyyy">
                       </div>
                       
                   </div>
               </div>
			</div>
			
			<div class="col-md-3 col-xs-6">	
		   <div class="form-group">
                              
                              <div class="checkbox-list">
                                 <div id="display" style="height:270px;overflow:auto;">
								
								 </div>
								 
                              </div>
            </div>

		   </div>
		   
		   
		</div>
		
	<div class="row">
		<div class="col-md-6">
		 <div class="btn-group pull-right">
		<form action="signup.php" target="_blank" method="post" id="signup">
			<input type="text" class="form-control" name="startdate" id="startdate" style="display:none;">
			<input type="text" class="form-control" name="times" id="times" style="display:none;" >
			<input type="text" class="form-control" name="tzn1" id="tzn1" style="display:none;" >
             <button type="button" class="btn green" id="next" style="height:52px;"> 
                           Next <i class="icon-angle-right"></i>
             </button>
			 </form>
        </div>

		<div class="alert alert-warning" id="tzone">All times are shown in Time Zone is: <b><span id="tzn" >UTC</span></b>
		&nbsp;<span id="t_sel">
		<select id="choose" class="choose">
		<option value="Pacific/Midway">(GMT-11:00) Midway Island 
                                 <option value="Pacific/Samoa">(GMT-11:00) Samoa 
                                 <option value="Pacific/Honolulu">(GMT-10:00) Hawaii 
                                 <option value="America/Anchorage">(GMT-09:00) Alaska 
                                 <option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US &amp; Canada) 
                                 <option value="America/Tijuana">(GMT-08:00) Tijuana 
                                 <option value="America/Chihuahua">(GMT-07:00) Chihuahua 
                                 <option value="America/Chihuahua">(GMT-07:00) La Paz 
                                 <option value="America/Mazatlan">(GMT-07:00) Mazatlan 
                                 <option value="America/Denver">(GMT-07:00) Mountain Time (US &amp; Canada) 
                                 <option value="America/Managua">(GMT-06:00) Central America 
                                 <option value="America/Chicago">(GMT-06:00) Central Time (US &amp; Canada) 
                                 <option value="America/Mexico_City">(GMT-06:00) Guadalajara 
                                 <option value="America/Mexico_City">(GMT-06:00) Mexico City 
                                 <option value="America/Monterrey">(GMT-06:00) Monterrey 
                                 <option value="America/Bogota">(GMT-05:00) Bogota 
                                 <option value="America/New_York">(GMT-05:00) Eastern Time (US &amp; Canada) 
                                 <option value="America/Lima">(GMT-05:00) Lima 
                                 <option value="America/Bogota">(GMT-05:00) Quito 
                                 <option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada) 
                                 <option value="America/Caracas">(GMT-04:30) Caracas 
                                 <option value="America/La_Paz">(GMT-04:00) La Paz 
                                 <option value="America/Santiago">(GMT-04:00) Santiago 
                                 <option value="America/St_Johns">(GMT-03:30) Newfoundland 
                                 <option value="America/Sao_Paulo">(GMT-03:00) Brasilia 
                                 <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires 
                                 <option value="America/Argentina/Buenos_Aires">(GMT-03:00) Georgetown 
                                 <option value="America/Godthab">(GMT-03:00) Greenland 
                                 <option value="America/Noronha">(GMT-02:00) Mid-Atlantic 
                                 <option value="Atlantic/Azores">(GMT-01:00) Azores 
                                 <option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is. 
                                 <option value="Africa/Casablanca">(GMT+00:00) Casablanca 
                                 <option value="Europe/London">(GMT+00:00) Edinburgh 
                                 <option value="Europe/Dublin">(GMT+00:00) Dublin 
                                 <option value="Europe/Lisbon">(GMT+00:00) Lisbon 
                                 <option value="Europe/London">(GMT+00:00) London 
                                 <option value="Africa/Monrovia">(GMT+00:00) Monrovia 
                                 <option value="UTC">(GMT+00:00) UTC 
                                 <option value="Europe/Amsterdam">(GMT+01:00) Amsterdam 
                                 <option value="Europe/Belgrade">(GMT+01:00) Belgrade 
                                 <option value="Europe/Berlin">(GMT+01:00) Berlin 
                                 <option value="Europe/Berlin">(GMT+01:00) Bern 
                                 <option value="Europe/Bratislava">(GMT+01:00) Bratislava 
                                 <option value="Europe/Brussels">(GMT+01:00) Brussels 
                                 <option value="Europe/Budapest">(GMT+01:00) Budapest 
                                 <option value="Europe/Copenhagen">(GMT+01:00) Copenhagen 
                                 <option value="Europe/Ljubljana">(GMT+01:00) Ljubljana 
                                 <option value="Europe/Madrid">(GMT+01:00) Madrid 
                                 <option value="Europe/Paris">(GMT+01:00) Paris 
                                 <option value="Europe/Prague">(GMT+01:00) Prague 
                                 <option value="Europe/Rome">(GMT+01:00) Rome 
                                 <option value="Europe/Sarajevo">(GMT+01:00) Sarajevo 
                                 <option value="Europe/Skopje">(GMT+01:00) Skopje 
                                 <option value="Europe/Stockholm">(GMT+01:00) Stockholm 
                                 <option value="Europe/Vienna">(GMT+01:00) Vienna 
                                 <option value="Europe/Warsaw">(GMT+01:00) Warsaw 
                                 <option value="Africa/Lagos">(GMT+01:00) West Central Africa 
                                 <option value="Europe/Zagreb">(GMT+01:00) Zagreb 
                                 <option value="Europe/Athens">(GMT+02:00) Athens 
                                 <option value="Europe/Bucharest">(GMT+02:00) Bucharest 
                                 <option value="Africa/Cairo">(GMT+02:00) Cairo 
                                 <option value="Africa/Harare">(GMT+02:00) Harare 
                                 <option value="Europe/Helsinki">(GMT+02:00) Helsinki 
                                 <option value="Europe/Istanbul">(GMT+02:00) Istanbul 
                                 <option value="Asia/Jerusalem">(GMT+02:00) Jerusalem 
                                 <option value="Europe/Helsinki">(GMT+02:00) Kyiv 
                                 <option value="Africa/Johannesburg">(GMT+02:00) Pretoria 
                                 <option value="Europe/Riga">(GMT+02:00) Riga 
                                 <option value="Europe/Sofia">(GMT+02:00) Sofia 
                                 <option value="Europe/Tallinn">(GMT+02:00) Tallinn 
                                 <option value="Europe/Vilnius">(GMT+02:00) Vilnius 
                                 <option value="Asia/Baghdad">(GMT+03:00) Baghdad 
                                 <option value="Asia/Kuwait">(GMT+03:00) Kuwait 
                                 <option value="Europe/Minsk">(GMT+03:00) Minsk 
                                 <option value="Africa/Nairobi">(GMT+03:00) Nairobi 
                                 <option value="Asia/Riyadh">(GMT+03:00) Riyadh 
                                 <option value="Europe/Volgograd">(GMT+03:00) Volgograd 
                                 <option value="Asia/Tehran">(GMT+03:30) Tehran 
                                 <option value="Asia/Muscat">(GMT+04:00) Abu Dhabi 
                                 <option value="Asia/Baku">(GMT+04:00) Baku 
                                 <option value="Europe/Moscow">(GMT+04:00) Moscow 
                                 <option value="Asia/Muscat">(GMT+04:00) Muscat 
                                 <option value="Europe/Moscow">(GMT+04:00) St. Petersburg 
                                 <option value="Asia/Tbilisi">(GMT+04:00) Tbilisi 
                                 <option value="Asia/Yerevan">(GMT+04:00) Yerevan 
                                 <option value="Asia/Kabul">(GMT+04:30) Kabul 
                                 <option value="Asia/Karachi">(GMT+05:00) Islamabad 
                                 <option value="Asia/Karachi">(GMT+05:00) Karachi 
                                 <option value="Asia/Tashkent">(GMT+05:00) Tashkent 
                                 <option value="Asia/Calcutta">(GMT+05:30) Chennai 
                                 <option value="Asia/Kolkata">(GMT+05:30) Kolkata 
                                 <option value="Asia/Calcutta">(GMT+05:30) Mumbai 
                                 <option value="Asia/Calcutta">(GMT+05:30) New Delhi 
                                 <option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenepura 
                                 <option value="Asia/Katmandu">(GMT+05:45) Kathmandu 
                                 <option value="Asia/Almaty">(GMT+06:00) Almaty 
                                 <option value="Asia/Dhaka">(GMT+06:00) Astana 
                                 <option value="Asia/Dhaka">(GMT+06:00) Dhaka 
                                 <option value="Asia/Yekaterinburg">(GMT+06:00) Ekaterinburg 
                                 <option value="Asia/Rangoon">(GMT+06:30) Rangoon 
                                 <option value="Asia/Bangkok">(GMT+07:00) Bangkok 
                                 <option value="Asia/Bangkok">(GMT+07:00) Hanoi 
                                 <option value="Asia/Jakarta">(GMT+07:00) Jakarta 
                                 <option value="Asia/Novosibirsk">(GMT+07:00) Novosibirsk 
                                 <option value="Asia/Hong_Kong">(GMT+08:00) Beijing 
                                 <option value="Asia/Chongqing">(GMT+08:00) Chongqing 
                                 <option value="Asia/Hong_Kong">(GMT+08:00) Hong Kong 
                                 <option value="Asia/Krasnoyarsk">(GMT+08:00) Krasnoyarsk 
                                 <option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur 
                                 <option value="Australia/Perth">(GMT+08:00) Perth 
                                 <option value="Asia/Singapore">(GMT+08:00) Singapore 
                                 <option value="Asia/Taipei">(GMT+08:00) Taipei 
                                 <option value="Asia/Ulan_Bator">(GMT+08:00) Ulaan Bataar 
                                 <option value="Asia/Urumqi">(GMT+08:00) Urumqi 
                                 <option value="Asia/Irkutsk">(GMT+09:00) Irkutsk 
                                 <option value="Asia/Tokyo">(GMT+09:00) Osaka 
                                 <option value="Asia/Tokyo">(GMT+09:00) Sapporo 
                                 <option value="Asia/Seoul">(GMT+09:00) Seoul 
                                 <option value="Asia/Tokyo">(GMT+09:00) Tokyo 
                                 <option value="Australia/Adelaide">(GMT+09:30) Adelaide 
                                 <option value="Australia/Darwin">(GMT+09:30) Darwin 
                                 <option value="Australia/Brisbane">(GMT+10:00) Brisbane 
                                 <option value="Australia/Canberra">(GMT+10:00) Canberra 
                                 <option value="Pacific/Guam">(GMT+10:00) Guam 
                                 <option value="Australia/Hobart">(GMT+10:00) Hobart 
                                 <option value="Australia/Melbourne">(GMT+10:00) Melbourne 
                                 <option value="Pacific/Port_Moresby">(GMT+10:00) Port Moresby 
                                 <option value="Australia/Sydney">(GMT+10:00) Sydney 
                                 <option value="Asia/Yakutsk">(GMT+10:00) Yakutsk 
                                 <option value="Asia/Vladivostok">(GMT+11:00) Vladivostok 
                                 <option value="Pacific/Auckland">(GMT+12:00) Auckland 
                                 <option value="Pacific/Fiji">(GMT+12:00) Fiji 
                                 <option value="Pacific/Kwajalein">(GMT+12:00) International Date Line West 
                                 <option value="Asia/Kamchatka">(GMT+12:00) Kamchatka 
                                 <option value="Asia/Magadan">(GMT+12:00) Magadan 
                                 <option value="Pacific/Fiji">(GMT+12:00) Marshall Is. 
                                 <option value="Asia/Magadan">(GMT+12:00) New Caledonia 
                                 <option value="Asia/Magadan">(GMT+12:00) Solomon Is. 
                                 <option value="Pacific/Auckland">(GMT+12:00) Wellington 
                                 <option value="Pacific/Tongatapu">(GMT+13:00) Nuku\alofa </option>
		</select></span> 
		<a id="tz_select" class=" " style="cursor:pointer" ><span class="badge badge-primary"><b>!</b></span>
Change</a>

</div>

		</div>
	</div>

	
			<!-- <div class="col-lg-5 col-md-3 col-sm-6 col-xs-12">	
		 <iframe src="https://calendar.zoho.com/eventreqForm/810138c11bc47aa4fcee89e7cd8b1384570fe2234d90cfe76939740f10175a4b4a64100d17cdc3bb?theme=3&l=en"  frameborder="0" scrolling="no" marginWidth="0" border="0px" marginHeight="0" height="300px" width="432px" allowTransparency="true" align="center"></iframe></div>
		</div>-->
		
         <!-- END DASHBOARD STATS -->
        
         <?php $sql = "SELECT * FROM calendar_settings WHERE block = 1 AND client_id = '$cid'"; 
		 $query = mysql_query($sql);
		 $a=array();
		 while($row = mysql_fetch_array($query))
		 {
		 $id = $row['day_id'];
		  array_push($a,$id);
		 ?>
		
		
		 <?php } //print_r($a);
		 
		 $result  =  join(",",$a );
		 
		 ?>
<input type="text" id="selected_days1" value="<?php echo $result; ?>"  style="display:none">		 


      </div>
      <!-- END PAGE -->
   </div>
   
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
  
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>   
   <!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script src="assets/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>   
   
   <script src="assets/plugins/flot/jquery.flot.js" type="text/javascript"></script>
   <script src="assets/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.pulsate.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-daterangepicker/moment.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>     
  
   
   <!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
   <script src="assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-easy-pie-chart/jquery.easy-pie-chart.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.sparkline.min.js" type="text/javascript"></script>  
   
    <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>

      <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script> 
 <script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
 <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
   <script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
   <script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>

   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js" type="text/javascript"></script>
   <script src="assets/scripts/index.js" type="text/javascript"></script>
   <script src="assets/scripts/tasks.js" type="text/javascript"></script>   
   <script src="assets/scripts/form-components.js"></script> 
   <script src="assets/jstz.js"></script>

	    
   <!-- END PAGE LEVEL SCRIPTS -->  
   <script>
      jQuery(document).ready(function() {
	   var sel = $('#selected_days1').val();
	   var dt = $('#datepick1').val();
		  $('#datepick').datepicker({
    		daysOfWeekDisabled: sel,
			startDate: new Date()
			});    
			
         
		 App.init(); // initlayout and core plugins
         Index.init();
         //Index.initJQVMAP(); // init index page's custom scripts
         Index.initCalendar(); // init index page's custom scripts
         Index.initCharts(); // init index page's custom scripts
         Index.initChat();
         Index.initMiniCharts();
         Index.initDashboardDaterange();
         Index.initIntro();
         Tasks.initDashboardWidget();
		 FormComponents.init();
		
		var tz = jstz.determine();
		 var a = tz.name(); 
		$('#tzn').html(a);
		
		$('#t_sel').hide();
		 $('#next').hide();
		  var val1 = $('#datepick1').val();
		   $('#datepick2').val(val1);
		    var val3 = $('#datepick3').val();
		  //$('#bread').append(val1+', ');
       // alert(val1);
	 $('#display').html('<div class="alert alert-success">Please wait...</div>');	
  
   var dataString = 'date1='+val1;
  $.ajax({
    type:'POST',
   // data:dataString,
	 data:{ date1: val1, tz: a},
    url:'jsondecode.php',
    success:function(data) {
      $('#display').html('<label  class=""><b>Availability for '+val3+'  </b></label><br>'+data);
	  $('#next').show();
	  $('#startdate').val(val1);
	  $('#startdate1').val(val1);
	   $('#tzn1').val(a);
    }
  });
		  
		 
		  
		  $('#datepick').on('changeDate', function(ev){
		  //var val1 = $('#datepick').val();
		  var val11 = ev.date.getFullYear();
		  var val12 = ev.date.getMonth()+1;
		  var val13 = ev.date.getDate();
		  var val14 = ev.date.getDay();
		  var val15;
		  var val16;
		  if(val14 == 0)
		  {val15 = 'Sunday';}
		  if(val14 == 1)
		  {val15 = 'Monday';}
		  if(val14 == 2)
		  {val15 = 'Tuesday';}
		  if(val14 == 3)
		  {val15 = 'Wednesday';}
		  if(val14 == 4)
		  {val15 = 'Thursday';}
		  if(val14 == 5)
		  {val15 = 'Friday';}
		  if(val14 == 6)
		  {val15 = 'Saturday';}
		  
		  if(val12 ==  1)
		  {val16 = 'Jan';}
		  if(val12 ==  2)
		  {val16 = 'Feb';}
		  if(val12 ==  3)
		  {val16 = 'Mar';}
		  if(val12 ==  4)
		  {val16 = 'Apr';}
		  if(val12 ==  5)
		  {val16 = 'May';}
		  if(val12 ==  6)
		  {val16 = 'Jun';}
		  if(val12 ==  7)
		  {val16 = 'Jul';}
		  if(val12 ==  8)
		  {val16 = 'Aug';}
		  if(val12 ==  9)
		  {val16 = 'Sep';}
		  if(val12 ==  10)
		  {val16 = 'Oct';}
		  if(val12 ==  11)
		  {val16 = 'Nov';}
		  if(val12 ==  12)
		  {val16 = 'Dec';}
		  
		  //$('#bread').append(val1+', ');
        //alert(val1);
		var n = val12.toString().length;
		
		if (n == 1)
		{
		val1 = val11+'-0'+val12+'-'+val13;
		 $('#datepick2').val(val1);
		}
		else
		{
		val1 = val11+'-'+val12+'-'+val13;
		 $('#datepick2').val(val1);
		}
	 $('#display').html('<div class="alert alert-success">Please wait...</div>');	
  
   var dataString = 'date1='+val1;
  $.ajax({
    type:'POST',
   // data:dataString,
	 data:{ date1: val1, tz: a},
    url:'jsondecode.php',
    success:function(data) {
      $('#display').html('<label  class=""><b>Availability for '+val15+', '+val16+' '+val13+' '+val11+'</b></label><br>'+data);
	  $('#next').show();
	  $('#startdate').val(val1);
	  $('#startdate1').val(val1);
	 $('#tzn1').val(a);
    }
  });
		
    });

      });
   </script>
   <script>
   $("input[type=checkbox]").change(function() {
    alert( $(this).val() );
});
   </script>
   <script type="text/javascript">
<!--
function countCheckedBoxes1(elem) {

var val1 = $('#datepick2').val();
			 // $li = $('<label></label>');
   		 //$li.text('Service: Appointment on '+val1+' '+elem.value);
    		$('#bread').html('Appointment on '+val1+' '+elem.value);
			
			   //$('#times2').val(val1+' '+elem.value);
			   }
			   
		   

var count = 0
function countCheckedBoxes(elem) {
     if(elem.checked)  {
	 
          if(count <= 1)  {
		
			
	
			count = count + 1;
			   if(count == 1)
			   {
			   var val1 = $('#datepick').val();
			  $li = $('<label></label>');
   		 $li.text(val1+' '+elem.value);
    		$('#bread').append($li);
			
			   $('#times2').val(val1+' '+elem.value);
			  
			   }
			   if(count == 2)
			   {
			      var val1 = $('#datepick').val();
				   $li = $('<label></label>');
   		 $li.text(' , or '+val1+' '+elem.value);
    		$('#bread').append($li);
			   $('#times3').val(val1+' '+elem.value);
			   }
              if(count > 1)  {
                   count = 1;
                   elem.checked = false;
				   $('label:contains('+elem.value+')', '#bread').remove();
				  alert('max 1 count');
              }
          }
		
		  
     } else {
         count = count - 1;
		  $('label:contains('+elem.value+')', '#bread').remove();
		   
         if(count < 0)  count = 0;
     }
}

//-->
</script>
<script>


    /* Get the checkboxes values based on the class attached to each check box */
    $("#next").click(function() {
       getValueUsingClass();
	    
    });

 

 
function getValueUsingClass(){
    /* declare an checkbox array */
    var chkArray = [];
     
    /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
    $(".chk:checked").each(function() {
        chkArray.push($(this).val());
    });
     
    /* we join the array separated by the comma */
    var selected;
    selected = chkArray.join(',');
     
    /* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
    if(selected.length > 1){
        //alert("You have selected " + selected); 
		$('#times').val(selected);
		$('#times1').val(selected);
		$('#portlet-config').modal('show');
		$('#signup').submit();
    }else{
        alert("Please at least one of the checkbox");
    }
}



$('#tz_select').on('click', function(){ 
$('#t_sel').show();

});

$('select').change(function(event) {
        var a = this.value;
		var b = $( "#choose option:selected" ).text();
		$('#tzn').html(b);
		
		
		
		 var val1 = $('#datepick1').val();
		   $('#datepick2').val(val1);
		    var val3 = $('#datepick3').val();
		  //$('#bread').append(val1+', ');
       // alert(val1);
	 $('#display').html('<div class="alert alert-success">Please wait...</div>');	
  
   var dataString = 'date1='+val1;
  $.ajax({
    type:'POST',
	 data:{ date1: val1, tz: a},
    url:'jsondecode.php',
    success:function(data) {
      $('#display').html('<label  class=""><b>Availability for '+val3+'  </b></label><br>'+data);
	  $('#next').show();
	  $('#startdate').val(val1);
	  $('#startdate1').val(val1);
	   $('#tzn1').val(a);
    }
  });
		
		
    }); 

</script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>