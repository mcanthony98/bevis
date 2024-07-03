<?php
session_start();
require "includes/connect.php";
include "includes/cart.php"; 



$pid = 4;
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
    <title>African Sisal Shopping Bag | Bevis Africa</title>
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
                    <h2 class="display-3">African Sisal Shopping Bag</h2>
                    <p>- Empowering Communities, Embracing Sustainability -</p>
                    <p class="lead">Discover our handcrafted African Sisal Shopping Bag, a perfect blend of traditional craftsmanship and eco-friendly design. Sustainably sourced from local communities, this spacious and durable bag is ideal for all your shopping needs while supporting artisans and promoting sustainable living practices.</p>
                </div>
            </div>
            <!-- portfolio requirement -->
            <div class="row mb-4" data-sticky-container>
                <div class="col-md-6">
                    <a class="mb-4 d-block" href="assets/images/sisal-bag-1.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-5a.jpg" alt="African Sisal Shopping Bag"></a>
                    <a class="mb-4 d-block" href="assets/images/sisal-bag-2.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-5b.jpg" alt="African Sisal Shopping Bag"></a>
                </div>
                <div class="col-md-6">
                    <div data-sticky data-margin-top="80" data-sticky-for="767">
                        <h2>Product Details</h2>
                        <h6>Material:</h6>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg">
                            <li class="list-group-item"><i class="fa fa-check"></i>Handcrafted from sustainably sourced sisal fibers, harvested by local communities in Africa.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Features intricate weaving techniques, showcasing traditional craftsmanship.</li>
                        </ul>
                        <br>
                        <h6>Design:</h6>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg">
                            <li class="list-group-item"><i class="fa fa-check"></i>Spacious and durable, perfect for groceries, beach outings, and everyday use.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Decorated with unique patterns and vibrant colors, reflecting African cultural heritage.</li>
                        </ul>
                        <br>
                        <h6>Features:</h6>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg">
                            <li class="list-group-item"><i class="fa fa-check"></i>Reinforced handles for comfortable carrying.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Lightweight yet strong construction, capable of carrying heavy loads.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Eco-friendly alternative to plastic bags, promoting sustainable living practices.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- portfolio solution -->
            <div class="row mb-4" data-sticky-container>
                <div class="col-md-6 order-last order-md-1">
                    <div data-sticky data-margin-top="80" data-sticky-for="767">
                        <h2>Impact</h2>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg">
                            <li class="list-group-item"><i class="fa fa-check"></i>Empowerment: Supports local artisans and women's cooperatives through fair trade practices. Provides training in craft skills and business development.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Sustainability: Promotes eco-conscious consumerism by offering a renewable and biodegradable alternative to synthetic materials.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Community Development: Contributes to poverty alleviation by creating sustainable livelihoods and fostering economic independence.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-last">
                    <a class="mb-4 d-block" href="assets/images/sisal-bag-3.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-5a.jpg" alt="African Sisal Shopping Bag"></a>
                </div>
            </div>

            <!-- portfolio features -->
            <div class="row">
                <!-- feature 1 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-heart"></i></div>
                        <h3 class="feature-box-title">Empowering Communities</h3>
                        <p class="feature-box-desc">Our mission is to empower communities by providing access to raw materials, skills training in traditional crafts, and other empowering workshops.</p>
                    </div>
                </div>
                <!-- feature 2 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-bag"></i></div>
                        <h3 class="feature-box-title">Sustainable Alternative</h3>
                        <p class="feature-box-desc">By promoting the use of sisal, we offer a sustainable alternative to environmentally harmful practices, contributing to global conservation efforts.</p>
                    </div>
                </div>
                <!-- feature 3 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-hand-open"></i></div>
                        <h3 class="feature-box-title">Uplifting Lives</h3>
                        <p class="feature-box-desc">We aim to uplift people out of poverty by creating sustainable income opportunities.</p>
                    </div>
                </div>
            </div>

            <!-- portfolio additional details -->
            <div class="row my-4">
                <div class="title text-center">
                    <span class="pre-title" style="color: black;">Important Product Information</span>
                </div>
                <div class="col-md-12">
                    <p><strong style="color: black;">Ideal For:</strong> Ethically conscious consumers seeking stylish, functional, and sustainable shopping solutions. Individuals passionate about supporting community empowerment and environmental sustainability.</p>
                    <p><strong style="color: black;">Care Instructions:</strong> Spot clean with a damp cloth as needed. Air dry thoroughly.</p>
                    <p><strong style="color: black;">Dimensions:</strong> Dimensions may vary slightly due to the handmade nature of the product.</p>
                    <p><strong style="color: black;">Note:</strong> Each bag is uniquely handmade, reflecting the artisan's individual creativity and skill. Your purchase not only supports sustainable practices but also directly impacts the lives of African artisans and their communities.</p>
                </div>
                <div class="col-md-12 text-center">
                    <h2>Price: 3,500 KSH</h2>
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
            <h3>Price: 3,500 KSH</h3>
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