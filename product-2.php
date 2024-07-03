<?php
session_start();
require "includes/connect.php";
include "includes/cart.php"; 



$pid = 2;
$pqry = "SELECT * FROM product JOIN category ON product.category_id=category.category_id WHERE product.product_id = '$pid'";
$pres = $pdo->query($pqry);
$prow = $pres->fetch_assoc();



$otherimgres = $pdo->query("SELECT * FROM prod_img WHERE product_id='$pid' ORDER BY type");

$moreqry = "SELECT * FROM product WHERE category_id=".$prow['category_id'];
$moreres = $pdo->query($moreqry);

$quickordurl = "Hello, I visited your website and would like to make an order for: ";
$quickordurl .= ">".$prow['name']." -SKU".$prow['product_id'].". ";

?>

<!doctype html>
<html lang="en">

<head>
    <title>Wood Stove | Bevis Africa</title>
    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>
    <style>
        .sticky-bottom-bar {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: black;
            padding: 15px 0;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            z-index: 999;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sticky-bottom-bar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;
        }

        .sticky-bottom-bar h3 {
            color: #fff;
            margin: 0;
            font-size: 24px;
        }

        .sticky-bottom-bar .btn-grad {
            background-color: black;
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            font-size: 18px;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
        }

        .sticky-bottom-bar .btn-grad:hover {
            background-color: white;
            color: black;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div class="preloader">
        <img src="assets/images/preloader.svg" alt="Pre-loader">
    </div>
    <!-- Header -->
    <?php include 'includes/navbar.php'; ?>
    <!-- =======================portfolio -->
    <section>
        <div class="container">
            <!-- Portfolio info -->
            <div class="row mb-4">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="display-3">Wood Stove</h2>
                    <p>- Efficient and Sustainable Cooking Solution -</p>
                    <p class="lead">Introducing our advanced firewood cook stove, engineered for efficiency and sustainability. This stove utilizes wood, straw, and biomass fuels, employing a scientific design to maximize fuel combustion and ensure powerful heat output. It significantly improves fuel efficiency, reduces emissions, and promotes environmental protection.</p>
                </div>
            </div>
            <!-- portfolio requirement -->
            <div class="row mb-4" data-sticky-container>
                <div class="col-md-6">
                    <a class="mb-4 d-block" href="assets/images/portfolio/01.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-2a.jpg" alt=""></a>
                    <a class="mb-4 d-block" href="assets/images/portfolio/02.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-2b.jpg" alt=""></a>
                </div>
                <div class="col-md-6">
                    <div data-sticky data-margin-top="80" data-sticky-for="767">
                        <h2>Product Details</h2>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg">
                            <li class="list-group-item"><i class="fa fa-check"></i>Stove Top: Thick cast iron with 6 pot supports, diameter 32cm</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Stove Body: 0.5mm 201 grade stainless steel</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Door Frame: 1mm stainless steel 430</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Handles: Heat-resistant, made of plastic and steel</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Combustion Chamber: 1mm stainless steel</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Inner Stick Support: 4-layer 5mm 304 stainless steel</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Outer Stick Support: 5mm steel with powder painting</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Stove Feet: Provides stability to the stove</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- portfolio solution -->
            <div class="row mb-4" data-sticky-container>
                <div class="col-md-6 order-last order-md-1">
                    <div data-sticky data-margin-top="80" data-sticky-for="767">
                        <h2>Lifespan and Warranty</h2>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg">
                            <li class="list-group-item"><i class="fa fa-check"></i>Lifespan: 7-10 years based on proper use and maintenance</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Warranty: 3 years</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-last">
                    <a class="mb-4 d-block" href="assets/images/portfolio/04.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-2c.jpg" alt=""></a>
                </div>
            </div>

            <!-- portfolio features -->
            <div class="row">
                <!-- feature 1 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-settings"></i></div>
                        <h3 class="feature-box-title">Efficient Performance</h3>
                        <p class="feature-box-desc">Maximizes fuel combustion and ensures powerful heat output, significantly improving fuel efficiency.</p>
                    </div>
                </div>
                <!-- feature 2 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-support"></i></div>
                        <h3 class="feature-box-title">Reduced Emissions</h3>
                        <p class="feature-box-desc">Scientifically designed to reduce emissions and promote environmental protection.</p>
                    </div>
                </div>
                <!-- feature 3 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-bolt"></i></div>
                        <h3 class="feature-box-title">Fuel Versatility</h3>
                        <p class="feature-box-desc">Utilizes wood, straw, and biomass fuels, providing flexibility in fuel options.</p>
                    </div>
                </div>
            </div>

            <!-- portfolio additional details -->
            <div class="row my-4">
                <div class="col-md-12">
                    <p>Experience the efficiency and sustainability of our advanced firewood cook stove. With its scientific design and high-quality materials, this stove is engineered to deliver exceptional cooking performance while minimizing environmental impact. Upgrade your cooking experience and contribute to a greener future with Bevis Africa's advanced firewood cook stove.</p>
                </div>
                <div class="col-md-12 text-center">
                    <h2>Price: 3,300 KSH</h2>
                    <form class="addtocart" method="POST">
						<input type="hidden" name="addcart" value="<?php echo $pid;?>">
						<input type="hidden" name="qty" value="1">
						<button type="submit" onclick="this.form.submit();"  class="btn btn-grad mt-4 mb-5" >Buy Now</button>
					</form>
                </div>

            </div>
            <!-- portfolio details End -->

        </div>
        <!-- portfolio End -->
    </section>
    <!-- =======================portfolio -->

    <!-- Sticky Bottom Bar -->
    <div class="sticky-bottom-bar">
        <div class="container">
            <h3>Price: 3,300 KSH</h3>
            <form class="addtocart" method="POST">
				<input type="hidden" name="addcart" value="<?php echo $pid;?>">
				<input type="hidden" name="qty" value="1">
				<button type="submit" onclick="this.form.submit();"  class="btn btn-grad" >Buy Now</button>
			</form>
        </div>
    </div>

    <!-- Footer, CTA -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>

    <script>
  $(document).ready(function() {
      $(".addtocart").submit(function(event) {
        event.preventDefault();
		
          var x = $(".addtocart").serialize();
          $.ajax({  
                        url:"processes/cartprocesses.php",  
                        type:"POST",  
                        data:x,
                        crossDomain: true,
                        cache: false, 
                        success:function(data){
                            window.location.href = "cart.php";

                            
                        }  
                });

      });
  });
</script>
</body>

</html>