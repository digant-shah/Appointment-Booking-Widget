
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
         <!-- END TOP NAVIGATION MENU -->
		 
<ul class="nav navbar-nav pull-right">
            <!-- BEGIN NOTIFICATION DROPDOWN -->
            <li class="dropdown" id="header_notification_bar">
               <a href="index.php" class="dropdown-toggle">
               Logout
               </a>
</li>
</ul>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
      <!-- BEGIN SIDEBAR -->
      <?php include('menu.php');
	  session_start();
	  $key = $_GET['key'];
	  $query = mysql_query("SELECT * FROM calendar_setting1 WHERE z_key = '$key'");
	  while($rw = mysql_fetch_array($query))
	  {
	  echo $cid = $rw['client_id'];
	  $_SESSION['cid'] = $cid;
	  } 
	   ?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->               
         <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="padding-top:5%;">
            <div class="modal-dialog modal-wide">
               <div class="modal-content">
                  <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                     <h4 class="modal-title"> Person Info</h4>
                  </div>
                  <div class="modal-body">
                   <div class="portlet-body form">
                              <!-- BEGIN FORM-->
                              <form action="insertzoho2.php" method="post" class="form-horizontal">
                                 <div class="form-body">
                                  
                                    <div class="row">
									<h3 class="page-title" style="background-color:#0099FF; color:#FFFFFF">
			    <img class="avatar" src="uploads/digant.jpg" >
                  <span><b>Samcom Technologies</b></span>
				 
               </h3>
                                       <div class="col-md-6">
									   
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Name</label>
                                             <div class="col-md-4">
                                                <input type="text" class="form-control" name="name" placeholder="First Name">
                                               
                                             </div>
											 <div class="col-md-4">
                                                <input type="text" class="form-control" name="lname" placeholder="Last Name">
                                               
                                             </div>
                                          </div>
                                       </div>
									   
                                       <!--/span-->
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Email</label>
                                             <div class="col-md-9">
                                                <input type="email" class="form-control" name="email" >
                                                
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
									<div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Phone</label>
                                             <div class="col-md-8">
                                                <input type="text" class="form-control" name="phone">
                                                
                                             </div>
                                          </div>
                                       </div>
                                      <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Date</label>
                                             <div class="col-md-9">
                                                <input type="text" class="form-control" name="startdate" id="startdate1" disabled="disabled" >
												<input type="text" class="form-control" name="startdate" id="startdate" style="display:none;">
                                               
                                             </div>
                                          </div>
                                       </div>
                                    </div>
									<div class="row">
                                       <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Notes</label>
                                             <div class="col-md-8">
                                               <textarea name="desc" class="form-control" style="height:100px;"></textarea>
                                               
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
									   <div class="col-md-6">
                                          <div class="form-group">
                                             <label class="control-label col-md-3">Preferred Time</label>
                                             <div class="col-md-9">
                                               <input type="text" class="form-control" name="times" id="times1" disabled="disabled">
											   <?php $query = mysql_query("SELECT * FROM calendar_setting1 where client_id = '$cid'");
											   while($row = mysql_fetch_array($query))
											   { ?>
											   <span class="help-block"><?php echo 'Time Zone: '. $row['timezone']; }?></span>
											   <!--<input type="text" class="form-control" name="times" id="times2" disabled="disabled">
											   <input type="text" class="form-control" name="times" id="times3" disabled="disabled">-->
                                               <input type="text" class="form-control" name="times" id="times" style="display:none;" >
                                             </div>
                                          </div>
                                       </div>
                                       
                                       <!--/span-->
                                    </div>
									</div>
									
									</div>
                  </div>
                  <div class="modal-footer">
                     <button type="submit" class="btn blue">Save changes</button>
                     <button type="button" class="btn default" data-dismiss="modal">Close</button>
                  </div>
				  </form>
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
		 
            <div class="col-md-6">
			
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
             
			   <h3 class="page-title" style="background-color:#0099FF; color:#FFFFFF">
			    <img class="avatar" src="uploads/digant.jpg" >
                  <span><b>Samcom Technologies</b></span>
				 
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                    <!-- <i class="icon-home"></i>-->
                     <a href="#" id="bread"><B>Service:</B> Appointment on &nbsp;</a>
                     <!--<i class="icon-angle-right"></i>-->
                  </li>
				  <?php $query = mysql_query("SELECT * FROM calendar_setting1 WHERE client_id = '$cid'");
				  while($row = mysql_fetch_array($query))
				  {$hr = $row['time_slot_hr'];
				  $min = $row['time_slot_min'];} ?>
                  <span class="pull-right"><img src="uploads/clock.png"><?php if(isset($hr)){echo $hr.' hour ';} echo $min.' minutes'; ?></span>
                 
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN DASHBOARD STATS -->
         <div class="row"  >
             <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">	
				<h4><b>Select Your Preferred Date</b></h4>
			 </div>
         </div>	
		  <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">									 
				<div class="form-group">
                  <div class="col-md-4">
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
			
			<div class="col-md-3 col-sm-6 col-xs-12">	
		   <div class="form-group">
                              
                              <div class="checkbox-list">
                                 <div id="display" style="height:270px;overflow:auto;">
								
								 </div>
								 
                              </div>
            </div>

		   </div>
		   
		   
		</div>
		<div class="row">
		<div class="col-md-4">
		<div class="alert-info" id="tzone">Your Time Zone is: <span id="tzn">Asia/Kolkata</span>
		&nbsp;<span id="t_sel">
		<select id="choose" class="choose">
		<option value="GMT+530">Asia/Kolkata</option>
		<option value="GMT-500">EST/Canada</option>
		<option value="GMT-500">America/New_york</option>
		<option value="UTC">UTC</option>
		</select></span> 
		<a id="tz_select" class=" pull-right" style="color:#000000; cursor:pointer" >Change</a></div>
		</div>
		
		<div class="col-md-7 btn-group pull-right">
             <a href="#"  class="btn green" id="next"> 
                           Next <i class="icon-angle-right"></i>
             </a>
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
    data:dataString,
    url:'jsondecode.php',
    success:function(data) {
      $('#display').html('<label  class=""><b>Availability for '+val3+'  </b></label><br>'+data);
	  $('#next').show();
	  $('#startdate').val(val1);
	  $('#startdate1').val(val1);
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
    data:dataString,
    url:'jsondecode.php',
    success:function(data) {
      $('#display').html('<label  class=""><b>Availability for '+val15+', '+val16+' '+val13+' '+val11+'</b></label><br>'+data);
	  $('#next').show();
	  $('#startdate').val(val1);
	  $('#startdate1').val(val1);
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
    		$('#bread').html('<B>Service: </B> Appointment on '+val1+' '+elem.value);
			
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
    }else{
        alert("Please at least one of the checkbox");
    }
}



$('#tz_select').on('click', function(){ 
$('#t_sel').show();

});

$('select').change(function(event) {
        var a = this.value;
		$('#tzn').html(a);
		
		
		
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
    }
  });
		
		
    }); 

</script>
   <!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>