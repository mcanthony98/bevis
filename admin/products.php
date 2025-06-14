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
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a class="text-info" href="index.php">Home</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	
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
	
	
	    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
            <div class="card">
              <div class="card-header">
				<div class="row">
			     <div class="col-6">
				 
                </div>
				<div class="col-6 float-right">
				 <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#modal-add">
                  <i class="fa fa-plus"></i> Add New
                </button>
				</div>
              </div>
             </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Status</th>
                    <th>More</th>
                  </tr>
                  </thead>
                  <tbody>
				  <?php 
				  $pqry = "SELECT * FROM product";
				  $pres = $conn->query($pqry);
				  if($pres->num_rows == 0){
				  }else{
					  while($prow = $pres->fetch_assoc()){
						  if($prow["status"] == 0){
							 $state = '<span class="badge badge-success">Active</span>'; 
						  }elseif($prow["status"] == 1){
							 $state = '<span class="badge badge-danger">Disabled</span>'; 
						  }

              $imgres = $conn->query("SELECT * FROM prod_img WHERE type=0 AND product_id=".$prow['product_id']);
              if($imgres->num_rows == 0){
                $img = 'placeholder.png';
              }else{
                $imgrow=$imgres->fetch_assoc();
                $img = $imgrow['image'];
              }
             
              
              
				  ?>
                  <tr>
                    <td><?php echo '<img src="../products/'.$img.'" style="max-height:60px;max-width:60px;">';?> <?php echo $prow["name"];?></td>
                    <td>Ksh <?php echo number_format($prow["price"]);?></td> 
                    <td><?php echo $prow["quantity"];?> </td>
                    <td><?php echo $state;?></td>
                    <td>
					<a href="product_more.php?product=<?php echo $prow["product_id"];?>" class="btn btn-xs btn-primary" ><i class="fa fa-search"></i> View</a>
					</td>
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

  <?php include "includes/footer.php";?>
 
</div>
<!-- ./wrapper -->



<!-- MODALS -->

<div class="modal fade" id="modal-add">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">New Product</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
				<form action="../processes/productprocesses.php" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
				  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter Product Name..." required>
                  </div>
				<div class="row">
                  <div class="col-6">
					<label>Price</label>
                    <div class="input-group form-group">
					  <div class="input-group-prepend">
						<span class="input-group-text">Ksh</span>
					  </div>
					  <input type="number" name="price" class="form-control" required>
					  <div class="input-group-append">
						<span class="input-group-text">.00</span>
					  </div>
					</div>
                  </div>


                  <div class="col-6">
                    <div class="form-group">
                        <label>Category</label>
                        <select name="cat" class="form-control" required>
						  <?php
							$catqry = "SELECT * FROM category";
								$cat_res = $conn->query($catqry);
								if($cat_res->num_rows == 0){
									echo '<option value="0">No Categories Availables</option>';
								}else{
								while($crow = $cat_res->fetch_assoc()){
						  ?>
                          <option value="<?php echo $crow["category_id"];?>"><?php echo $crow["category_name"];?></option>
								<?php } } ?>
						  <option value="0">None</option>
                        </select>
                      </div>
                  </div>
				  
                  <div class="col-6">
					<label>Quantity Available (Pieces)</label>
                    <div class="form-group">
					  <input type="number" name="qty" class="form-control" required>
					  </div>
                  </div>

				  <div class="col-12">
					<label>Description</label>
                    <textarea class="form-control" name="desc" rows="8" required placeholder="Enter description..."></textarea>
                  </div>
                </div>  
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <input type="submit" value="Add Product" name="add-product" class="btn btn-info">
			  </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	  
	  <div class="modal fade" id="modal-desc">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Description</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" id="desc">
				
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
	  

      <?php include "includes/scripts.php";?>
</body>
</html>
<script>  
 $(document).ready(function(){  
      $('.view_desc').click(function(){  
           var p_id = $(this).attr("id");  
           $.ajax({  
                url:"product_row.php",  
                method:"POST",  
                data:{desc_id:p_id},  
                success:function(data){  
                     $('#desc').html(data);  
                     $('#dataModal').modal("show");  
                }  
           });  
      });  
 });  
 </script>
</body>
</html>
