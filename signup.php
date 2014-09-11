<?php session_start();
include('config.php');
$cid = $_SESSION['cid'];
$key = $_SESSION['key'];
$query = mysql_query("SELECT * FROM calendar_setting1 WHERE z_key = '$key'");
	  while($rw = mysql_fetch_array($query))
	  {
	 // $cid = $rw['client_id'];
	 // $_SESSION['cid'] = $cid;
	  $img = $rw['img'];
	  $title = $rw['cname'];
	  $subtitle = $rw['cname2'];
	  $col = $rw['header_color'];
	  } 

?>
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
   <title>Add Account</title>
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
	<style>
   
  .page-sidebar-closed .page-content {
margin-left: 0px !important; 
}
</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
      <div class="page-content" style="margin-left:0px;">
         
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-6 col-xs-12">
			
			
			
			
			<!--<div id="info"><div class="alert alert-warning">You Already Have Configured Account</div></div>-->
               <div class="">
                  
                  
                     <div id="">
                        <div class="">
                           
                           <div class="">
                              <!-- BEGIN FORM-->
                              <form action="insertzoho2.php" class="form-horizontal" method="post">
							
                                 <div class="">
                                   
                                    <div class="row">
									
                                       <div class="col-md-8 col-xs-12">
									   <img class="avatar pull-left" src="uploads/<?php echo $img;?>" style="margin-left:2%;" >
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
             
			  
			    
               <h3 class="page-title" style="background-color:<?php echo $col;?>; color:#FFFFFF; height:100px;">
			    
                  <span><br>&nbsp;&nbsp;<b><?php echo $title; ?></b><br>&nbsp;&nbsp;<font size="+1"><?php echo $subtitle; ?></font></span>
				 
               </h3>
			   </div>
			   </div><div class="row">
									
                                       <div class="col-md-12 col-xs-12">
                                          <div class="form-group">
                                             <label class="control-label col-md-2 col-xs-3"> Name</label>
                                             <div class="col-md-3 col-xs-11" >
											 <input type="text" class="form-control" id="fname" name="fname" value="" required placeholder="Firstname" >
                                               
                                             </div>
											 <div class="col-md-3 col-xs-11">
											 <input type="text" class="form-control" id="fname" name="lname" value="" required   placeholder="Lastname">
                                               
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                       </div>
                                       <!--/span-->
                                   <div class="row">
                                   <div class="col-md-12">
                                          <div class="form-group">
                                             <label class="control-label col-md-2 col-xs-3">E-mail</label>
                                             <div class="col-md-6 col-xs-11">
                                                <input type="email" class="form-control" required id="email" name="email">
                                                
                                             </div>
                                          </div>
                                       </div>
                                       <!--/span-->
                                    </div>
									<div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label class="control-label col-md-2 col-xs-3">Phone</label>
                                             <div class="col-md-6 col-xs-11">
                                                <input type="text" class="form-control" required name="phone">
                                                
                                             </div>
                                          </div>
                                       </div>
									   
									   </div>
									  
									<div class="row">
                                       <div class="col-md-12">
                                          <div class="form-group">
                                             <label class="control-label col-md-2 col-xs-3">Notes</label>
                                             <div class="col-md-6 col-xs-11">
                                               <textarea name="desc" class="form-control" required style="height:100px;"></textarea>
                                               
                                             </div>
                                          </div>
                                       </div>
									    </div>
                                       <!--/span-->
									   <div class="row">
									   <div class="col-md-12">
                                          <div class="form-group">
                                             <label class="control-label col-md-2 col-xs-3">Date</label>
                                             <div class="col-md-6 col-xs-11">
                                                <input type="text" class="form-control" name="startdate" id="startdate1" value="<?php echo $_POST['startdate'];?>" disabled="disabled" >
												<input type="text" class="form-control" name="startdate" id="startdate" value="<?php echo $_POST['startdate'];?>" style="display:none;">
                                               
                                             </div>
                                          </div>
                                       </div>
									   </div>
									   <div class="row">
									   <div class="col-md-12">
                                          <div class="form-group">
                                             <label class="control-label col-md-2 col-xs-3">Preferred Time</label>
                                             <div class="col-md-6 col-xs-11">
                                               <input type="text" class="form-control" name="times" value="<?php echo $_POST['times'];?>" id="times1" disabled="disabled">
											   <?php //$query = mysql_query("SELECT * FROM calendar_setting1 where client_id = '$cid'");
											   //while($row = mysql_fetch_array($query))
											   //{ ?>
											   <span class="help-block" id="tzn1">Time Zone: <?php echo $_POST['tzn1']; ?></span>
											   <!--<input type="text" class="form-control" name="times" id="times2" disabled="disabled">
											   <input type="text" class="form-control" name="times" id="times3" disabled="disabled">-->
                                               <input type="text" class="form-control" name="times" id="times" value="<?php echo $_POST['times'];?>"  style="display:none;" >
                                             </div>
                                          </div>
										</div>
								    </div>
                                      
                                    <div class="row">
                                       <div class="col-md-8 col-xs-12">
									   <div class="form-actions fluid" >
                                          <div class="col-md-offset-4 col-xs-12">
                                             <button type="submit" class="btn green">Submit</button>
                                             <button type="button" class="btn default" onClick="self.close()">Cancel</button>                              
                                          </div>
                                       </div>
                                       
                                    </div>
                                 </div>
                              </form>
                              <!-- END FORM-->                
                           </div>
                        </div>
                     </div>
                   
                  </div>
               </div>
            </div>
         </div>
         <!-- END PAGE CONTENT-->    
    
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      <div class="footer-inner">
         2014 &copy; Efax.
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
   <script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
   <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
   <script src="assets/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
   <script src="assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
   <script src="assets/plugins/jquery.cookie.min.js" type="text/javascript"></script>
   <script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
   <!-- END CORE PLUGINS -->
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/form-samples.js"></script>   
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {    
         // initiate layout and plugins
         App.init();
         FormSamples.init();
		
		 
		 
		 $("#country").on('click', function() {
        
		data1 = $(this).val();
           var dataString = 'name1='+data1;
			$.ajax({
    			type:'POST',
    			data:dataString,
    			url:'country.php',
    			success:function(data) {
      			$( "#city" ).html(data);
				}
  			});
         });
		 
		 
		  $("#city").on('change', function() {
		 	data2 = $(this).val();
      		var dataString1 = 'name2='+data2;
			$.ajax({
    			type:'POST',
    			data:dataString1,
    			url:'number.php',
    			success:function(data) {
      			$( "#number" ).html(data);
				}
  			});
         });
		 
	
		 
		}); 
		 
		 
		 
		 
   </script>
   
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>