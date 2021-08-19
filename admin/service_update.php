<?php require_once('config/connection.php'); 

 
//getting id of the data from url
if(isset($_GET['id']))
{
$id1 = $_GET['id'];	
//selecting the row from table
$sql2="Select * from service where s_id = '".$id1."'";

$result=mysqli_query($conn,$sql2);

$row2 = mysqli_fetch_array($result);
}



?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/metrolab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:14 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Form Update</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/style-default.css" rel="stylesheet" id="style_color" />

    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />

    <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />


   

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
<?php include_once('partial/header.php');?>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <?php include_once('partial/sidebar.php');?>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
               
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Service Update
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">service Update</a>
                           <span class="divider">/</span>
                       </li>
                    
                     
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Update Form </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="" class="form-horizontal" method="POST"  enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Category Name</label>
                                <div class="controls">
                                   <select class="form-control" name="cname">
                                  
										<?php
                                             $sql1 = "SELECT * FROM category";
                                             $result1 = mysqli_query($conn, $sql1);
                                             if (mysqli_num_rows($result1) > 0)
                                              {
                                                   while($row1 = mysqli_fetch_assoc($result1)) 
                                                   {
                                                       $selected = ($row1['id'] == $row['c_id']) ? "selected" : "";
                                                       echo "<option ".$selected." value='".$row1['c_id']."'>".$row1['c_name']."</option>";
                                                    }
                                              }
										?>
                          
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Service Name</label>
                                <div class="controls">
                                    <input type="text" class="span6 " name="sname" value="<?php echo $row2['s_name'];?>" />
                          
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Service Description</label>
                                <div class="controls">
                                    <textarea class="span6 " rows="3" name="description"   required><?php echo $row2['s_desc'];?></textarea>
                                </div>
                            </div>
                           
                            <div class="control-group">
                                <label class="control-label">Service Image</label>
                                <div class="controls">
                                     <input type="file" name="uploadfile"/>
                                     <input type="hidden" name="sub_img_old" value="<?php echo $row2['s_img'];?>">
                                     
                                </div>
                            </div>
                            <img  width="70" height="100" src="images_all/<?php echo $row2['s_img'] ?>">

                     
                            <div class="form-actions">
                                <button type="submit"  name="update_img"  class="btn btn-success">Submit</button>
                                <button type="button" class="btn">Cancel</button>
                            </div>
                            	
            <?php
                 if ($_SERVER["REQUEST_METHOD"] == "POST")
                 
                 {
                   
                    if (isset($_POST["update_img"]))
                      { 
                        
                           $sname=$_POST["sname"];
                           $cname=$_POST["cname"];
                           $desc=$_POST["description"];
                           $old_img=$_POST["sub_img_old"];
					       $new_img = $_FILES["uploadfile"]["name"]; 
                       

                           if($new_img != '')
                           {
                                $update_filename=$_FILES["uploadfile"]["name"]; 
                           }
                           else
                           {
                            $update_filename=$old_img; 
                           }
                           
                
                            $sql = "update service set s_name='".$sname."',s_desc='".$desc."',s_img='".$update_filename."',c_id='".$cname."' where s_id = '".$id1."'";

                             $result=mysqli_query($conn,$sql);

                          
                              if($result)
                              {
                                  if($new_img !='')
                                  {
                                    move_uploaded_file($_FILES["uploadfile"]["tmp_name"],"images_all/".$_FILES["uploadfile"]["name"]); 
                                    unlink("images_all/".$old_img);
                                  }
                                   echo " data Sucessfully updated !";
                                   echo '<script>window.location.href = "service_view.php";</script>';
                              }
                              else
                              {
                                echo "data not Sucessfully updated !";
                                header("Location:service_view.php");
                              }

                           

					     
                     }
                }   
				  
		    ?>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
           
          
          
         
         

         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
</div>

   <!-- BEGIN FOOTER -->
   <?php include_once('partial/footer.php');?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->

   <script src="js/jquery-1.8.2.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>

   <script src="../../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>


   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>



   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page-->
   <script src="js/form-component.js"></script>
  <!-- END JAVASCRIPTS -->

   <script language="javascript" type="text/javascript">

       $(function() {

           $.configureBoxes();

       });

   </script>


</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/metrolab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:39 GMT -->
</html>