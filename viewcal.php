<?php session_start();
if($_SESSION["userid"] == "")
{
header("location:index.php");
}
						$cid = $_SESSION["userid"]; ?>
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
   <title>View Cal Details</title>
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
   <link rel="stylesheet" href="assets/plugins/data-tables/DT_bootstrap.css" />
   <!-- END PAGE LEVEL STYLES -->
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
         <a class="navbar-brand" href="index.html">
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
                     <input type="text" id="edit_id" value="" class="icon medium" placeholder="Project Title" />
					
					 
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
                     
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  View Calendars
               </h3>
               
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN EXAMPLE TABLE PORTLET-->
               <div class="portlet box blue">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-edit"></i>Calendar List</div>
                     
                  </div>
                 
						<?php
						
						if($cid == '12')
						{
						?>
						 <div class="portlet-body">
				  <div class="table-responsive">
                     <div class="table-toolbar">
                        <div class="btn-group">
                           <button id="sample_editable_1_new1" class="btn green" onClick="location.href='calendar_new.php';">
                           Add New <i class="icon-plus"></i>
                           </button>
                        </div>
                        
                     </div>
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Name</th>
                              
                              <th>Zohokey</th>
                              <th>calendar code</th>
							  <th>view </th>
							  <th>Mobile view</th>
                              <th>Edit</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php 
						$sql_select = mysql_query("SELECT * from calendar_setting1 WHERE client_id != 12");
						 while($row = mysql_fetch_array($sql_select))
 {
 
 ?>
					<tr >
                              <td><?php echo $row['cname'];?></td>
                              
                              <td><?php echo $row['z_key'];?></td>
							<?php  $a = "<iframe src=".'http://crmshop.ca/demo/widget.php?key='.$row['z_key'].' height="650" width="790" scrolling="no" frameborder="0"></iframe>'; ?>
							
                             <td class="center" id="frame2"> <textarea style="width:400px;cursor:text;" disabled="disabled"><?php echo $a; ?></textarea> </td>
							 <td><a href="widget.php?key=<?php echo $row['z_key'];?>" target="_blank">View</a></td>
							 <td><a href="m_widget.php?key=<?php echo $row['z_key'];?>" onClick="window.open(this.href, 'mywin',
'left=20,top=20,width=320,height=500,toolbar=1,resizable=0');return false;">Mobile View</a></td>
                              <td><a href="calendar.php?id=<?php echo $row['client_id'];?>">Edit</a></td>
                              <td><a class="delete" data-id="<?php echo $row['client_id'];?>" >Delete</a></td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>	
						
						<?php 
						} else { ?>
						
						 <div class="portlet-body">
				  <div class="table-responsive">
                     <div class="table-toolbar">
                        <div class="btn-group">
                           
                        </div>
                        
                     </div>
                     <table class="table table-striped table-hover table-bordered" id="sample_editable_1">
                        <thead>
                           <tr>
                              <th>Name</th>
                              
                              <th>Zohokey</th>
                              <th>calendar code</th>
							  <th>view </th>
							  <th>Mobile view</th>
                              <th>Edit</th>
                              <th>Delete</th>
                           </tr>
                        </thead>
                        <tbody>
						<?php
						
						$sql_select = mysql_query("SELECT * from calendar_setting1 WHERE client_id = '$cid'");
 while($row = mysql_fetch_array($sql_select))
 {
 
 ?>
 
                           <tr >
                              <td><?php echo $row['cname'];?></td>
                              
                              <td><?php echo $row['z_key'];?></td>
							<?php  $a = "<iframe src=".'http://samcom.url.ph/calendar/widget.php?key='.$row['z_key'].' height="650" width="790" scrolling="no" frameborder="0"></iframe>'; ?>
							
                             <td class="center" id="frame2"> <textarea style="width:400px;cursor:text;" disabled="disabled"><?php echo $a; ?></textarea> </td>
							 <td><a href="widget.php?key=<?php echo $row['z_key'];?>" target="_blank">View</a></td>
							 <td><a href="m_widget.php?key=<?php echo $row['z_key'];?>" onClick="window.open(this.href, 'mywin',
'left=20,top=20,width=320,height=500,toolbar=1,resizable=0');return false;">Mobile View</a></td>
                              <td><a href="calendar.php?id=<?php echo $row['client_id'];?>">Edit</a></td>
                              <td><a class="delete" data-id="<?php echo $row['client_id'];?>" >Delete</a></td>
                           </tr>
                           <?php } ?>
                        </tbody>
                     </table>
					 <?php } ?>
                  </div>
               </div>
			   </div>
               <!-- END EXAMPLE TABLE PORTLET-->
            </div>
         </div>
         <!-- END PAGE CONTENT -->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2014 &copy; POS System.
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
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/table-editable.js"></script>    
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TableEditable.init();
     
	  
	  
	  });
   </script>
   <script>
		$(document).ready(function() {
        $(document).on('click', '.delete', function() {
		
		//alert($(this).data("id"));
		var data1 = $(this).data("id"); 
// alert (data1);
  var dataString = 'name1='+data1;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'delemp.php',
    success:function(data) {
      alert('Deleted!');
	  
    }
  });
       
   
		
		});
		});
   </script>
  
   
</body>
<!-- END BODY -->
</html>