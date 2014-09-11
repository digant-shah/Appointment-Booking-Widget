
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
   <title>Calendar Config</title>
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
   <!-- BEGIN PAGE LEVEL STYLES --> 
 <link rel="stylesheet" type="text/css" href="assets/plugins/select2/select2_metro.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/jquery-multi-select/css/multi-select.css" />
   
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" />
   <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap-datetimepicker/css/datetimepicker.css" />

   <!-- END PAGE LEVEL SCRIPTS -->
   <!-- BEGIN THEME STYLES --> 
   <link href="assets/css/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/plugins.css" rel="stylesheet" type="text/css"/>
   <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="assets/css/custom.css" rel="stylesheet" type="text/css"/>
   <!-- END THEME STYLES -->
   <link rel="shortcut icon" href="favicon.ico" />
	<?php include('config.php'); ?>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
   <!-- BEGIN HEADER -->   
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="header-inner">
         <!-- BEGIN LOGO -->  
         <a class="navbar-brand" href="#">
         POS SYSTEM
         </a>
         <!-- END LOGO -->
         <!-- BEGIN RESPONSIVE MENU TOGGLER --> 
         <a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
         <img src="assets/img/menu-toggler.png" alt="" />
         </a> 
         <!-- END RESPONSIVE MENU TOGGLER -->
         <!-- BEGIN TOP NAVIGATION MENU -->
		 <ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
               <a href="index.php" class="dropdown-toggle" >
               Logout
               </a>
</li>
</ul>
         </div>
		 </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <?php include('menu.php'); ?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title">Modal title</h4>
                  </div>
                  <div class="modal-body">
                     Widget settings form goes here
                  </div>
                  <div class="modal-footer">
                     <button type="button" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
               </div>
               <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
         </div>
         <!-- /.modal -->
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN STYLE CUSTOMIZER -->
         
         <!-- END BEGIN STYLE CUSTOMIZER -->            
         <!-- BEGIN PAGE HEADER-->   
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                 Calendar Settings
               </h3>
               
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="portlet box green">
                           <div class="portlet-title">
                              <div class="caption"><i class="icon-reorder"></i>Calendar Settings</div>
                              <div class="tools">
                                 <a href="javascript:;" class="collapse"></a>
                                 <a href="#portlet-config" data-toggle="modal" class="config"></a>
                                 <a href="javascript:;" class="reload"></a>
                                 <a href="javascript:;" class="remove"></a>
                              </div>
                           </div>
                           <div class="portlet-body form">
                              <!-- BEGIN FORM-->
                              <form action="new_cal_db.php" method="post" class="form-horizontal" enctype="multipart/form-data">
                                
								 
								 <div class="form-body">
                                    <h3 class="form-section">Open Business Hours</h3>
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3"><b><u>Days</u></b></label>
											 <div class="col-md-9">
                                               <div class="checkbox-list">
                                 
								
                                 <label class="checkbox-inline">
                                 <b><u>Start Time</u></b>
                                 </label>
								 <label class="checkbox-inline">
                                <b><u>End Time</u></b>
                                 </label>
								  
                                 
                                 
                              					</div>
                                             </div>
											  
                                             
                                          </div>
                                       </div>
                                      
                                    </div>
								
									<div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Monday</label>
                                             <div class="col-md-9">
                                               <div class="checkbox-list">
                               
                                 
								 <label class="checkbox-inline">
								                                        
                        <input type="text" class="form-control timepicker-default input-small" required id="m1" name="m1">
                                 </label>
								 <label class="checkbox-inline">
                         <input type="text" class="form-control timepicker-default input-small" required id="m2" name="m2" >
								 
                                 </label>
								  <label class="checkbox-inline">
                                 <input type="checkbox" class="form-control" id="m3" name="m3" value="option1"> Block
                                 </label>
								 
                                 
                              					</div>
                                             </div>
                                          </div>
                                       </div>
									  </div>
									  <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Tuesday</label>
                                             <div class="col-md-9">
                                               <div class="checkbox-list">
											  
								<label class="checkbox-inline">
								                                        
                        <input type="text" class="form-control timepicker-default input-small" required id="t1" name="t1" >
                                 </label>
								 <label class="checkbox-inline">
                         <input type="text" class="form-control timepicker-default input-small" required id="t2" name="t2" >
								 
                                 </label>
								  <label class="checkbox-inline">
                                 <input type="checkbox" id="t3" name="t3" value="option1"> Block
                                 </label>
								
                                 
                                 
                              					</div>
                                             </div>
                                          </div>
                                       </div>
									  </div>
									  <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Wednesday</label>
                                             <div class="col-md-9">
                                <div class="checkbox-list">
								<label class="checkbox-inline">
								                                        
                        <input type="text" class="form-control timepicker-default input-small" required id="w1" name="w1" >
                                 </label>
								 <label class="checkbox-inline">
                         <input type="text" class="form-control timepicker-default input-small" required id="w2" name="w2" >
								 
                                 </label>
								  <label class="checkbox-inline">
                                 <input type="checkbox" id="w3" name="w3" value="option1"> Block
                                 </label>
								 
                                 
                                 
                              					</div>
                                             </div>
                                          </div>
                                       </div>
									  </div>
									  <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Thursday</label>
                                             <div class="col-md-9">
                                               <div class="checkbox-list">
                                
								<label class="checkbox-inline">
								                                        
                        <input type="text" class="form-control timepicker-default input-small" required id="th1" name="th1" >
                                 </label>
								 <label class="checkbox-inline">
                         <input type="text" class="form-control timepicker-default input-small" required id="th2" name="th2" >
								 
                                 </label>
								  <label class="checkbox-inline">
                                 <input type="checkbox" id="th3" name="th3" value="option1"> Block
                                 </label>
								
                                 
                              					</div>
                                             </div>
                                          </div>
                                       </div>
									  </div>
									  <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Friday</label>
                                             <div class="col-md-9">
                                               <div class="checkbox-list">
                               
								<label class="checkbox-inline">
								                                        
                        <input type="text" class="form-control timepicker-default input-small" required id="f1" name="f1" >
                                 </label>
								 <label class="checkbox-inline">
                         <input type="text" class="form-control timepicker-default input-small" required id="f2" name="f2" >
								 
                                 </label>
								  <label class="checkbox-inline">
                                 <input type="checkbox" id="f3" name="f3" value="option1"> Block
                                 </label>
								 
                                 
                              					</div>
                                             </div>
                                          </div>
                                       </div>
									  </div>
									  <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Saturday</label>
                                             <div class="col-md-9">
                                               <div class="checkbox-list">
                                 
							
								<label class="checkbox-inline">
								                                        
                        <input type="text" class="form-control timepicker-default input-small" required id="s1" name="s1" >
                                 </label>
								 <label class="checkbox-inline">
                         <input type="text" class="form-control timepicker-default input-small" required id="s2" name="s2" >
								 
                                 </label>
								  <label class="checkbox-inline">
                                 <input type="checkbox" id="s3" name="s3" value="option1"> Block
                                 </label>
								 
                                 
                                 
                              					</div>
                                             </div>
                                          </div>
                                       </div>
									  </div>
									  <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Sunday</label>
                                             <div class="col-md-9">
                                               <div class="checkbox-list">
                              
								<label class="checkbox-inline">
								                                        
                        <input type="text" class="form-control timepicker-default input-small" required id="su1" name="su1" >
                                 </label>
								 <label class="checkbox-inline">
                         <input type="text" class="form-control timepicker-default input-small" required id="su2" name="su2" >
								 
                                 </label>
								  <label class="checkbox-inline">
                                 <input type="checkbox" id="su3" name="su3" value="option1"> Block
                                 </label>
								
                                 
                                 
                              					</div>
                                             </div>
                                          </div>
                                       </div>
									  </div>
									   
                                      
									<h3 class="form-section"></h3>
									 <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Username</label>
                                             <div class="col-md-6">
											
											  <input type="text" class="form-control" required name="username" >
											 </div>
									      </div>
										   </div>
										   </div>
										   
										    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Password</label>
                                             <div class="col-md-6">
											
											  <input type="password" class="form-control" required name="password" >
											 </div>
									      </div>
										   </div>
										   </div>
									
									<div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Time Slot Window</label>
                                             <div class="col-md-9">
                                 <div class="checkbox-list">
                                 
								
                                 <label class="checkbox-inline">
                                 <select name="time_hour" class="form-control">
								
								 <option>0</option>
								 <option>1</option>
								 <option>2</option>
								 <option>3</option>
								 <option>4</option>
							     <option>5</option>
							     <option>6</option>
								 <option>7</option>
								 <option>8</option>
									   
								 </select> 
								 <span class="help-block">Hour</span>
                                 </label>
								 

								 <label class="checkbox-inline">
                                 <select name="time_min" class="form-control">
								 
								 <option>30</option>
								 <option>45</option>
								 <option>15</option>
								 <option>0</option>
								 </select>
								 <span class="help-block">Mins</span>
                                 </label>
								  
                                 
                                 
                              					</div>
											 
											 </div>
										  </div>
                                       </div>
									  </div>
									 <!-- <h3 class="form-section"></h3>-->
									  <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Time Zone</label>
                                             <div class="col-md-6">
											  <select class="form-control" name="tz">
											 
											  <option value="America/New_York">(GMT-05:00) Eastern Time (US &amp; Canada) 
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
											  </select>
											 </div>
									      </div>
										   </div>
										   </div>
									  
									 <!-- <h3 class="form-section"></h3>-->
									  <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Redirect URL</label>
                                             <div class="col-md-6">
											
											  <input type="text" class="form-control"  id="r_url" name="r_url" >
											 </div>
									      </div>
										   </div>
										   </div>
									  <!--<h3 class="form-section"></h3>-->
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Thank you Message</label>
                                             <div class="col-md-6">
                                                <textarea name="thanku"  class="form-control"></textarea>
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
									   </div>
									   
									 <!--<h3 class="form-section"></h3>-->
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Zoho Key</label>
                                             <div class="col-md-6">
                                                 <input type="text"  class="form-control" id="z_key" name="z_key" >
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
									   </div>
									   
									   <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Image</label>
                                             <div class="col-md-6">
                                                 <input type="file" class="form-control"  id="file" name="file" >
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
									   </div> 
									   
									    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Title</label>
                                             <div class="col-md-6">
                                                 <input type="text" class="form-control"  id="cname" name="cname" >
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
									    <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Select Color</label>
                                             <div class="col-md-6">
                                                 <input type="color" class="form-control" id="cname" name="namecol" value="" >
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
									   </div>
									   </div>
									    <div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Sub-Title</label>
                                             <div class="col-md-6">
                                                 <input type="text" class="form-control" id="cname" name="cname2" >
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
									   <div class="col-md-4">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Select Color</label>
                                             <div class="col-md-6">
                                                 <input type="color" class="form-control" id="cname" name="namecol2" value="" >
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
									   </div>
									   </div> 
									   
                                      
								<div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Select Color</label>
                                             <div class="col-md-6">
                                                 <input type="color" class="form-control" name="col" value="#f0ffff" >
                                                <span class="help-block"></span>
                                             </div>
                                          </div>
                                       </div>
									   
									   </div>
									
									
                                 
                                 <div class="form-actions fluid">
                                    <div class="row">
                                       <div class="col-md-6">
                                          <div class="col-md-offset-3 col-md-9">
                                             <input type="submit" class="btn green">
                                             <button type="button" class="btn default" onClick="window.history.back();">Cancel</button>                              
                                          </div>
                                       </div>
                                       <div class="col-md-6">
                                       </div>
                                    </div>
                                 </div>
                              </form>
                              <!-- END FORM-->                
                           </div>
                        </div>
                     </div>
					 </div>
                    
                   
               
         <!-- END PAGE CONTENT-->    
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2013 &copy; Metronic by keenthemes.
      </div>
      <div class="footer-tools">
         <span class="go-top">
         <i class="icon-angle-up"></i>
         </span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
   <!-- BEGIN CORE PLUGINS -->   
   <!--[if lt IE 9]>
   <script src="assets/plugins/respond.min.js"></script>
   <script src="assets/plugins/excanvas.min.js"></script> 
   <![endif]-->   
   <script src="assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
   <!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>      
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   
  
    <script type="text/javascript" src="assets/plugins/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
 <script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>

   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script> 
   <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/form-samples.js"></script>   
    <script src="assets/scripts/form-components.js"></script> 
	
	
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {    
         // initiate layout and plugins
         App.init();
         FormSamples.init();
		  FormComponents.init();
		  
		  
      });
	  
	  $('#m3').click(function() {
    if(this.checked)
	{
	$('#m1').attr("readonly","readonly");
	$('#m2').attr("readonly","readonly");
	}
	else
	{
	$('#m1').removeAttr("readonly");
	$('#m2').removeAttr("readonly");
	}
	});
	 $('#t3').click(function() {
    if(this.checked)
	{
	$('#t1').attr("readonly","readonly");
	$('#t2').attr("readonly","readonly");
	}
	else
	{
	$('#t1').removeAttr("readonly");
	$('#t2').removeAttr("readonly");
	}
	});
	$('#w3').click(function() {
    if(this.checked)
	{
	$('#w1').attr("readonly","readonly");
	$('#w2').attr("readonly","readonly");
	}
	else
	{
	$('#w1').removeAttr("readonly");
	$('#w2').removeAttr("readonly");
	}
	});
	$('#th3').click(function() {
    if(this.checked)
	{
	$('#th1').attr("readonly","readonly");
	$('#th2').attr("readonly","readonly");
	}
	else
	{
	$('#th1').removeAttr("readonly");
	$('#th2').removeAttr("readonly");
	}
	});
	$('#f3').click(function() {
    if(this.checked)
	{
	$('#f1').attr("readonly","readonly");
	$('#f2').attr("readonly","readonly");
	}
	else
	{
	$('#f1').removeAttr("readonly");
	$('#f2').removeAttr("readonly");
	}
	});
	$('#s3').click(function() {
    if(this.checked)
	{
	$('#s1').attr("readonly","readonly");
	$('#s2').attr("readonly","readonly");
	}
	else
	{
	$('#s1').removeAttr("readonly");
	$('#s2').removeAttr("readonly");
	}
	});
	$('#su3').click(function() {
    if(this.checked)
	{
	$('#su1').attr("readonly","readonly");
	$('#su2').attr("readonly","readonly");
	}
	else
	{
	$('#su1').removeAttr("readonly");
	$('#su2').removeAttr("readonly");
	}
});
   </script>
   
<script>   
$('#m1').timepicker({defaultTime: 'value'});
$('#m2').timepicker({defaultTime: 'value'});

$('#t1').timepicker({defaultTime: 'value'});
$('#t2').timepicker({defaultTime: 'value'});

$('#w1').timepicker({defaultTime: 'value'});
$('#w2').timepicker({defaultTime: 'value'});

$('#th1').timepicker({defaultTime: 'value'});
$('#th2').timepicker({defaultTime: 'value'});

$('#f1').timepicker({defaultTime: 'value'});
$('#f2').timepicker({defaultTime: 'value'});

$('#s1').timepicker({defaultTime: 'value'});
$('#s2').timepicker({defaultTime: 'value'});

$('#su1').timepicker({defaultTime: 'value'});
$('#su2').timepicker({defaultTime: 'value'});

 </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>