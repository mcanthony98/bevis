<?php 
session_start();
include "includes/sessions.php";
include "../includes/connect.php"; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
 <?php include "includes/header.php";?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


    <?php include "includes/navbar.php";?>


    <?php include "includes/sidebar.php";?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-info" href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Orders</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
	
	 <?php 
			if(isset($_SESSION["error"])){
				echo '
				<div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
				  <i class="icon fas fa-ban"></i>
                  '.$_SESSION["error"].'
                </div>
				';
				unset ($_SESSION["error"]);
			}if(isset($_SESSION["success"])){
				echo '
				<div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                  <i class="icon fas fa-check"></i> 
				  '.$_SESSION["success"].'
                </div>
				';
				unset ($_SESSION["success"]);
			}
			?>
	
	
    <div class="card card-warning card-outline card-outline-tabs">
              <div class="card-header p-0 border-bottom-0">
                <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill" href="#custom-tabs-four-home" role="tab" aria-controls="custom-tabs-four-home" aria-selected="true">All Orders</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill" href="#custom-tabs-four-profile" role="tab" aria-controls="custom-tabs-four-profile" aria-selected="false">Pending</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-messages-tab" data-toggle="pill" href="#custom-tabs-four-messages" role="tab" aria-controls="custom-tabs-four-messages" aria-selected="false">Completed</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-four-settings-tab" data-toggle="pill" href="#custom-tabs-four-settings" role="tab" aria-controls="custom-tabs-four-settings" aria-selected="false">Cancelled</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-four-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-four-home" role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                          <th>Order Number</th>
                          <th>Customer</th>
                          <th>Status</th>
                          <th>Date Ordered</th>
                          <th></th>
                        </tr>
                        </thead>
                        <tbody>
                <?php 
                $ord = "SELECT * FROM orders o JOIN users u ON o.user_id=u.user_id WHERE o.order_status>0 ORDER BY o.order_id DESC";
                $ores = $pdo->query($ord);
                if($ores->num_rows == 0){
                  echo '
                  <tr>
                  <td class="text-center" colspan=9>No orders to display!</td>
                  <tr/>';
                }else{
                  while($orow = $ores->fetch_assoc()){
                                  
                    
                    if($orow["order_status"] == 1){
                      $status = '<span class="badge badge-info">Pending</span>';
                    }elseif($orow["order_status"] == 2){
                      $status = '<span class="badge badge-success">Complete</span>';
                    }elseif($orow["order_status"] == 3){
                      $status = '<span class="badge badge-danger">Cancelled</span>';
                    }elseif($orow["order_status"] == 0){
                      $status = '<span class="badge badge-secondary">Pending Payment</span>';
                    }
                ?>
                        <tr>
                          <td><?php echo $orow["order_code"];?></td>
                          <td><?php echo $orow["firstname"]." ".$orow["firstname"];?></td>
                          <td><?php echo $status;?></td>
                          <td><?php  echo date('Y-M-d H:i', strtotime($orow["date_ordered"]));?></td>
                          
                          <td>
                          <a href="order.php?order=<?php echo $orow["order_id"];?>" class="btn btn-xs btn-primary"  data-toggle="modal" data-target="#modal-ord"><i class="fa fa-search"></i> View</a>

                          <a href="processes.php?complete=<?php echo $orow["order_id"];?>" class="btn btn-xs btn-success"><i class="fas fa-check-circle"></i> Complete</a>

                          <a href="processes.php?cancel=<?php echo $orow["order_id"];?>" onClick="return confirm('Are you sure you want to cancel order?');" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
                          </td>
                        </tr>
                <?php }}?>
                      </tbody>
                      </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel" aria-labelledby="custom-tabs-four-profile-tab">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Order Number</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Date Ordered</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
              <?php 
              $ord = "SELECT * FROM orders o JOIN users u ON o.user_id=u.user_id WHERE o.order_status=1 ORDER BY o.order_id DESC";
              $ores = $pdo->query($ord);
              if($ores->num_rows == 0){
                echo '
                <tr>
                <td class="text-center" colspan=9>No orders to display!</td>
                <tr/>';
              }else{
                while($orow = $ores->fetch_assoc()){
                                
                  
                  if($orow["order_status"] == 1){
                    $status = '<span class="badge badge-info">Pending</span>';
                  }elseif($orow["order_status"] == 2){
                    $status = '<span class="badge badge-success">Complete</span>';
                  }elseif($orow["order_status"] == 3){
                    $status = '<span class="badge badge-danger">Cancelled</span>';
                  }elseif($orow["order_status"] == 0){
                    $status = '<span class="badge badge-secondary">Pending Payment</span>';
                  }
              ?>
                      <tr>
                        <td><?php echo $orow["order_code"];?></td>
                        <td><?php echo $orow["firstname"]." ".$orow["firstname"];?></td>
                        <td><?php echo $status;?></td>
                        <td><?php  echo date('Y-M-d H:i', strtotime($orow["date_ordered"]));?></td>
                        
                        <td>
                        <a href="order.php?order=<?php echo $orow["order_id"];?>" class="btn btn-xs btn-primary"  data-toggle="modal" data-target="#modal-ord"><i class="fa fa-search"></i> View</a>

                        <a href="processes.php?complete=<?php echo $orow["order_id"];?>" class="btn btn-xs btn-success"><i class="fas fa-check-circle"></i> Complete</a>

                        <a href="processes.php?cancel=<?php echo $orow["order_id"];?>" onClick="return confirm('Are you sure you want to cancel order?');" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
                        </td>
                      </tr>
              <?php }}?>
                    </tbody>
                      </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-messages" role="tabpanel" aria-labelledby="custom-tabs-four-messages-tab">
                    <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Order Number</th>
                      <th>Customer</th>
                      <th>Status</th>
                      <th>Date Ordered</th>
                      <th></th>
                    </tr>
                    </thead>
                    <tbody>
            <?php 
            $ord = "SELECT * FROM orders o JOIN users u ON o.user_id=u.user_id WHERE o.order_status=2 ORDER BY o.order_id DESC";
            $ores = $pdo->query($ord);
            if($ores->num_rows == 0){
              echo '
              <tr>
              <td class="text-center" colspan=9>No orders to display!</td>
              <tr/>';
            }else{
              while($orow = $ores->fetch_assoc()){
                              
                
                if($orow["order_status"] == 1){
                  $status = '<span class="badge badge-info">Pending</span>';
                }elseif($orow["order_status"] == 2){
                  $status = '<span class="badge badge-success">Complete</span>';
                }elseif($orow["order_status"] == 3){
                  $status = '<span class="badge badge-danger">Cancelled</span>';
                }elseif($orow["order_status"] == 0){
                  $status = '<span class="badge badge-secondary">Pending Payment</span>';
                }
            ?>
                    <tr>
                      <td><?php echo $orow["order_code"];?></td>
                      <td><?php echo $orow["firstname"]." ".$orow["firstname"];?></td>
                      <td><?php echo $status;?></td>
                      <td><?php  echo date('Y-M-d H:i', strtotime($orow["date_ordered"]));?></td>
                      
                      <td>
                      <a href="order.php?order=<?php echo $orow["order_id"];?>" class="btn btn-xs btn-primary"  data-toggle="modal" data-target="#modal-ord"><i class="fa fa-search"></i> View</a>

                      <a href="processes.php?complete=<?php echo $orow["order_id"];?>" class="btn btn-xs btn-success"><i class="fas fa-check-circle"></i> Complete</a>

                      <a href="processes.php?cancel=<?php echo $orow["order_id"];?>" onClick="return confirm('Are you sure you want to cancel order?');" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
                      </td>
                    </tr>
            <?php }}?>
                  </tbody>
                    </table>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-four-settings" role="tabpanel" aria-labelledby="custom-tabs-four-settings-tab">
                      <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>Order Number</th>
                        <th>Customer</th>
                        <th>Status</th>
                        <th>Date Ordered</th>
                        <th></th>
                      </tr>
                      </thead>
                      <tbody>
              <?php 
              $ord = "SELECT * FROM orders o JOIN users u ON o.user_id=u.user_id WHERE o.order_status=3 ORDER BY o.order_id DESC";
              $ores = $pdo->query($ord);
              if($ores->num_rows == 0){
                echo '
                <tr>
                <td class="text-center" colspan=9>No orders to display!</td>
                <tr/>';
              }else{
                while($orow = $ores->fetch_assoc()){
                                
                  
                  if($orow["order_status"] == 1){
                    $status = '<span class="badge badge-info">Pending</span>';
                  }elseif($orow["order_status"] == 2){
                    $status = '<span class="badge badge-success">Complete</span>';
                  }elseif($orow["order_status"] == 3){
                    $status = '<span class="badge badge-danger">Cancelled</span>';
                  }elseif($orow["order_status"] == 0){
                    $status = '<span class="badge badge-secondary">Pending Payment</span>';
                  }
              ?>
                      <tr>
                        <td><?php echo $orow["order_code"];?></td>
                        <td><?php echo $orow["firstname"]." ".$orow["firstname"];?></td>
                        <td><?php echo $status;?></td>
                        <td><?php  echo date('Y-M-d H:i', strtotime($orow["date_ordered"]));?></td>
                        
                        <td>
                        <a href="order.php?order=<?php echo $orow["order_id"];?>" class="btn btn-xs btn-primary"  data-toggle="modal" data-target="#modal-ord"><i class="fa fa-search"></i> View</a>

                        <a href="processes.php?complete=<?php echo $orow["order_id"];?>" class="btn btn-xs btn-success"><i class="fas fa-check-circle"></i> Complete</a>

                        <a href="processes.php?cancel=<?php echo $orow["order_id"];?>" onClick="return confirm('Are you sure you want to cancel order?');" class="btn btn-xs btn-danger"><i class="fa fa-times-circle"></i> Cancel</a>
                        </td>
                      </tr>
              <?php }}?>
                    </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
              <!-- /.card -->
            </div>
    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
    <?php include "includes/footer.php";?>
  <!-- ./Main Footer -->
</div>
<!-- ./wrapper -->

<!-- MODALS -->

<div class="modal fade" id="modal-ord">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Order Details</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="odetails">
				
				
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

<!-- REQUIRED SCRIPTS -->


<?php include "includes/scripts.php";?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
      "ordering": true,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>  
 $(document).ready(function(){  
      $('.view_ord').click(function(){  
           var ord_id = $(this).attr("id");  
           $.ajax({  
                url:"order_row.php",  
                method:"POST",  
                data:{ord_id:ord_id},  
                success:function(data){  
                     $('#odetails').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>
