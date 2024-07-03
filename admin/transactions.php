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
            <h1 class="m-0 text-dark">Transactions</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-info" href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Transactions</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	
	
	
	    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Order</th>
                    <th>Amount</th>
                    <th>Customer</th>
                    <th>M-Pesa Number</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php
					$tran = "SELECT * FROM transaction ORDER BY transaction_id DESC";
					$tres = $pdo->query($tran);
					if($tres->num_rows == 0){
						echo '
						<tr>
						<td class="text-center" colspan=6>No Transactions to display!</td>
						<tr/>';
					}else{
						while($trow = $tres->fetch_assoc()){
							$ordcode = $trow["order_id"];
							$ord = "SELECT * FROM orders WHERE order_id = '$ordcode'";
							$ores = $pdo->query($ord);
							$orow = $ores->fetch_assoc();
							
							$uqry = 'SELECT * FROM users WHERE user_id ='.$orow["user_id"].'';
							$ures = $pdo->query($uqry);
							$urow = $ures->fetch_assoc();
							
							
				  ?>
                  <tr>
                    <td><?php echo $orow["order_code"];?></td>
                    <td>Ksh <?php echo $trow["amount"];?></td>
                    <td><?php echo $urow["firstname"] .' '. $urow["lastname"] ;?></td>
                    <td><?php echo $trow["payer_number"];?></td>
                    <td><?php echo date('Y-M-d H:i', strtotime($trow["transaction_date"]));?></td>
                  </tr>
					<?php } }?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	
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
           var ord_code = $(this).attr("id");  
           $.ajax({  
                url:"order_row.php",  
                method:"POST",  
                data:{ord_code:ord_code},  
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
