<?php 
session_start();
include "includes/sessions.php";
include "../includes/connect.php"; 


if(!isset($_GET['order'])){
    echo '<script>location.replace("orders.php");</script>';
    exit ();
}
$orid = $_GET['order'];
$ord = "SELECT * FROM orders o JOIN users u ON o.user_id=u.user_id WHERE o.order_id='$orid' ORDER BY o.order_id DESC";
$ordres = $conn->query($ord);
$row = $ordres->fetch_assoc();

$txres = $conn->query("SELECT * FROM transaction WHERE order_id='$orid'");
$txrow = $txres->fetch_assoc();

$ordprodres = $conn->query("SELECT * FROM order_product op JOIN product p ON op.product_id=p.product_id WHERE op.order_id='$orid'");

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
            <h1 class="m-0">Order Details</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
                    <div class="container-fluid">
                        <!-- Default box -->
                        <div class="card">
                            <div class="card-body">

                              <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <b>Order Number:</b> <?php echo $row['order_code'];?>
                    <small class="float-right">Date: <?php echo date('d/m/Y H:ia ', strtotime($row['date_ordered']));?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Customer Details
                  <address>
                    <strong><?php echo $row['firstname']." ".$row['lastname'];?></strong><br>
                    Email: <?php echo $row['email'];?><br>
                    Phone: <?php echo $row['phone'];?><br>
                    <?php echo $row['delivery_address'];?><br>
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                 
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Order Status <?php echo orderStatus($row['order_status']);?></b><br>
                   <br>

                 
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Price </th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php 
                       while($prow = $ordprodres->fetch_assoc()){
                        
          
                        $imgres = $conn->query("SELECT * FROM prod_img WHERE type=0 AND product_id=".$prow['product_id']);
                        if($imgres->num_rows == 0){
                          $img = 'placeholder.png';
                        }else{
                          $imgrow=$imgres->fetch_assoc();
                          $img = $imgrow['image'];
                        }
                      ?>
                    <tr>
                      <td><?php echo $prow['quantity_ordered'];?></td>
                      <td>
                        <div class="d-flex">
                            <span><img src="products/<?php echo $img;?>" width="60"></span>
                            <span><?php echo $prow['name'];?></span>
                        </div>
                    </td>
                      <td><?php echo $prow['amount_per_item'];?></td>
                      <td>Ksh <?php echo $prow['quantity_ordered'] * $prow['amount_per_item'];?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-7">
                  
                </div>
                <!-- /.col -->
                <div class="col-5 mb-3">

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>Total:</th>
                        <td>Ksh <?php echo $txrow['amount'];?></td>
                      </tr>
                      <tr>
                        <th>Ref Code:</th>
                        <td><?php echo $txrow['transaction_code'];?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                    
                
                    <a href="processes.php?complete=<?php echo $orid;?>" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Complete Order
                    </a>


                    <a href="processes.php?cancel=<?php echo $orid;?>" class="btn btn-danger float-right" style="margin-right: 5px;">
                    <i class="fas fa-times"></i> Cancel Order
                    </a>

               
                </div>
              </div>
            </div>
            <!-- /.invoice -->

                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include "includes/footer.php";?>
 

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Receive Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="processes.php">
          <div class="form-group">
            <label>Bar Code</label>
            <input type="text" class="form-control" name="br" required>
          </div>
          <input type="hidden" class="form-control" name="orid" value="<?php echo $orid;?>" required>
          <div class="form-group">
            <label>Quantity Received</label>
            <input type="number" class="form-control" name="qty" required>
          </div>
      </div>
      <div class="modal-footer">
        <button type="submit" name="receive" class="btn btn-primary">Submit</button>
      </form>
      </div>
    </div>
  </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Receive Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="findproduct">
        <div class="form-group">
            <label>Enter the Product BarCode</label>
            <input type="text" id="sale_barcode" class="form-control">
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary">Search product</button>
        </form>
<hr class="my-3">
        <div class="mt-3 ">
            <form method="post" action="processes.php">
            <div class="d-flex" id="product_found">
                
            </div>

            <div id="hidsection" style="display: none;">
                <hr class="my-3">
            <div class="form-group" >
                <label>Quantity Received</label>
                <input type="number" name="qty"  class="form-control" required>
                <input type="hidden" class="form-control" name="orid" value="<?php echo $orid;?>" required>
            </div>
            <button type="submit" name="receive" class="btn btn-primary">Submit</button>
            </div>
            </form>
            

        </div>
      </div>
    </div>
  </div>
</div> 


</div>
<!-- ./wrapper -->

<?php include "includes/scripts.php";?>
<script>
    $('#findproduct').on('submit', function(event) {
        event.preventDefault();
        var sale_barcode = $('#sale_barcode').val();
        var ord_barcode = <?php echo $row['barcode'];?>;
        if(sale_barcode != ord_barcode){
          $('#product_found').html("<span class='text-center'>Barcode not for this order!</span>");
          $('#hidsection').hide();
        }else{
$.ajax({  
					url:"processes.php",  
					method:"POST",  
                    dataType: 'json',
					data:{sale_barcode:sale_barcode},  
					success:function(data){ 
                     if(data){ 
                        var prt = '<span><img src="../uploads/' + data.image + '" width="70"></span>\
                <span class="ml-2">' + data.prod_name +'</span>\
                <input type="hidden" name="prodid" value="'+data.prod_id +'"  class="form-control">';
                        
                $('#product_found').html(prt); 
                $('#hidsection').show();
                     }
					}  
			   });
        }
        
    });
</script>
</body>
</html>

<?php 
function orderStatus($status){
  if($status == 0){
    $output = "<span class='badge badge-secondary'>Pending Payment</span>";
  }elseif($status  == 1){
    $output = '<span class="badge badge-info">Pending</span>';
  }elseif($status  == 2){
    $output = '<span class="badge badge-success">Complete</span>';
  }elseif($status  == 3){
    $output = '<span class="badge badge-danger">Cancelled</span>';
  }

  return $output;
}

function paymentStatus ($status){
  if($status == 0){
    $output = "<span class='badge badge-warning'>Unpaid</span>";
  }elseif($status == 1){
    $output = "<span class='badge badge-success'>Paid</span>";
  }
  return $output;
}
?>
