<?php require_once("config\connection.php");?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/metrolab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:46 GMT -->


<head>
   <meta charset="utf-8" />
   <title>service Table</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="css/style.css" rel="stylesheet" />
   <link href="css/style-responsive.css" rel="stylesheet" />
   <link href="css/style-default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
    <!-- Data table css  -->
   <link rel="stylesheet" href="assets/data-tables/jquery.dataTables.min.css" />
   <link rel="stylesheet" href="assets/data-tables/buttons.dataTables.min.css" />

   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />




<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <?php include_once('partial/header.php');  ?>
  <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
	    
	<?php include_once('partial/sidebar.php');  ?>
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
                     Service Table
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="index.php">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Service
                       </li>
                       <li class="pull-right search-wrap">
                           
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN EDITABLE TABLE widget-->
             <div class="row-fluid">
                 <div class="span12">
                     <!-- BEGIN EXAMPLE TABLE widget-->
                     <div class="widget purple">
                         <div class="widget-title">
                             <h4><i class="icon-reorder"></i> Service</h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                                <a href="javascript:;" class="icon-remove"></a>
                            </span>
                         </div>
                         <div class="widget-body">
                             <div>
                                 <div class="clearfix">
                                     <div class="btn-group">
                                         <a href='service_insert.php'><button id="" class="btn green">
                                             Add New <i class="icon-plus"></i>
                                         </button></a>
                                     </div>
									 
									 </div>
                                     
                                 </div>
                                 <div class="space15"></div>
                                 <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                     <thead>
                                     <tr>
										 <th>Service Name</th>
                                         <th>Category Name</th>
                                         <th>Description</th>
										 <th>Image Path</th>
                                         <th>Action</th>

                                     </thead>
                                     <tbody>
                                         <?php
                                                $sql="select * from service s join category c where s.c_id=c.c_id";
                                                $result=mysqli_query($conn,$sql);
                                                if (!$result) {
                                                    printf("Error: %s\n", mysqli_error($conn));
                                                    exit();
                                                }while($row = mysqli_fetch_array($result))
                                                {
                                                    ?>
                                                    <tr>
                                                    <td><?php echo $row['s_name']; ?> </td>
                                                    <td><?php echo $row['c_name'];?></td>
                                                    <td><?php  echo  $row['s_desc'];?></td>
                                                    <td> <img src="<?php echo  $imageURL = 'images_all/'.$row['s_img']; ?>" alt="" width="80px"/></td>
                                                    <td id="<?php echo $row['s_id']?>">
                                                     <button class="btn btn-danger btn-sm remove">Delete</button>
                                                     <a href="service_update.php?id=<?php echo $row['s_id']?>"><button type="button" class="btn btn-success">Update</button></a>
                                                     </td>

                                        <?php }?>
                                        
                                    </tbody>
                                 </table>
                             </div>
                         </div>                                                                                                                                                 
                     </div>
                     <!-- END EXAMPLE TABLE widget-->
                 </div>
             </div>

            <!-- END EDITABLE TABLE widget-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
   <?php include_once('partial/footer.php') ?>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
    <script src="assets/data-tables/jquery-3.3.1.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="js/jquery.blockui.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script src="assets/data-tables/jquery.dataTables.min.js"></script>
   <script src="assets/data-tables/dataTables.buttons.min.js"></script>
   <script src="assets/data-tables/jszip.min.js"></script>
   <script src="assets/data-tables/pdfmake.min.js"></script>
   <script src="assets/data-tables/vfs_fonts.js"></script>
   <script src="assets/data-tables/buttons.html5.min.js"></script>
   <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>


   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page only-->
   <script src="js/editable-table.js"></script>

   <!-- END JAVASCRIPTS -->
   <script>
       jQuery(document).ready(function() {
           EditableTable.init();
       });
   </script>
    <script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("td").attr("id");


        if(confirm('Are you sure to remove this record ?'))
        {
            $.ajax({
               url: 'service_delete.php',
               type: 'GET',
               data: {id: id},
               error: function() {
                  alert('Something is wrong');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Record removed successfully");  
               }
            });
        }
    });


</script>
</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/metrolab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2010], Mon, 30 Oct 2017 07:00:47 GMT -->
</html>