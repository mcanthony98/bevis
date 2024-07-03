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
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Add a new Article </h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Article Add</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-lg-10 mx-auto">
				<form class="vstack gap-4" enctype="multipart/form-data" method="post" action="processes.php">

					<!-- Cab Detail START -->
					<div class="card card-primary shadow">
                        <div class="card-header">
                            <h3 class="card-title">Enter Article Details</h3>
              
                            <div class="card-tools">
                              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                              </button>
                            </div>
                          </div>
						<!-- Card body -->
						<div class="card-body">
							<div class="row g-3">
								<!-- Car name -->
								<div class="col-12 mb-3">
									<label class="form-label">Article Title</label>
									<input class="form-control" type="text" name="tit" placeholder="Enter Article Title">
								</div>

								<!-- Desc -->
								<div class="col-12 mb-3">
									<label class="form-label">Short Description (20 - 30 characters)</label>
									<textarea class="form-control" rows="3" name="desc" placeholder="Enter Description"></textarea>
								</div>

                                <!-- Desc 
								<div class="col-12">
									<label class="form-label">Long Description (50 Words)</label>
									<textarea class="form-control" rows="6" name="ldesc" placeholder="Enter Description"></textarea>
								</div>-->

                                 <!-- Desc -->
								<div class="col-12 mb-3">
									<label class="form-label">Article Content</label>
									
                                    <textarea class="form-control" id="summernote3" name="content"></textarea>
								</div>


                                <!-- Desc -->
								<div class="col-md-6 mb-3">
									<label class="form-label">Article Category</label>
									<input class="form-control" type="text" name="cat" placeholder="Enter Article Category">
								</div>
								
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Category Color</label>
                                    <select class="form-control " name="cat_color" >
                                        <option>Select a color</option>
                                        <option value="warning">Mustard</option>
                                        <option value="success">Green</option>
                                        <option value="danger">Red</option>
                                        <option value="primary">Purple</option>
                                        <option value="dark">Black</option>
                                    </select>
                                </div>

								<!-- Desc -->
								<div class="col-12 ">
                                    <label for="exampleInputFile">Choose image (Preferred ratio: 3:2)</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="photos" id="exampleInputFile">
                                            <label class="custom-file-label"  for="exampleInputFile">Choose image</label>
                                        </div>
                                    </div>
								</div>

								
							</div>
						</div>
                        <div class="card-footer">
                            <div class="text-end">
                                <button type="submit" name="add-blog" class="btn btn-primary mb-0">Post Article</button>
                            </div>
                        </form>
                        </div>
					</div>
					<!-- Cab Detail END -->


					<!-- Button -->
					
			</div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include "includes/footer.php";?>
 
</div>
<!-- ./wrapper -->

<?php include "includes/scripts.php";?>
</body>
</html>
