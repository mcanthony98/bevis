<!doctype html>
<html lang="en">

<head>
    <title>School Cooking Solution | Bevis Africa</title>
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
                    <h2 class="display-3">Climate-Friendly School Cooking Solution</h2>
                    <p>- Efficient, Sustainable, and Safe Cooking for Educational Institutions -</p>
                    <p class="lead">At Bevis Africa, we are committed to combating climate change through innovative products like our efficient firewood school cooking solution. Designed specifically for educational institutions, this stove not only meets rigorous cooking demands but also promotes sustainability and reduces environmental impact.</p>
                </div>
            </div>
            <!-- portfolio requirement -->
            <div class="row mb-4" data-sticky-container>
                <div class="col-md-6">
                    <a class="mb-4 d-block" href="assets/images/portfolio/01.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-1a.jpg" alt=""></a>
                    <a class="mb-4 d-block" href="assets/images/portfolio/02.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-1b.jpg" alt=""></a>
                </div>
                <div class="col-md-6">
                    <div data-sticky data-margin-top="80" data-sticky-for="767">
                        <h2>Product Specifications</h2>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg">
                            <li class="list-group-item"><i class="fa fa-check"></i>Advanced Design: Engineered for durability and efficiency, using high-quality materials suitable for continuous use in schools.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Fuel Versatility: Optimized for burning firewood, biomass, and other local fuels efficiently, minimizing carbon emissions.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Enhanced Efficiency: High thermal efficiency ensures maximum heat transfer to cooking vessels, reducing fuel consumption.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Emission Reduction: Incorporates advanced combustion technology to minimize smoke and pollutants, contributing to cleaner air quality.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Capacity and Performance: Supports multiple cooking pots simultaneously with even heat distribution for consistent cooking results.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Durable Construction: Built to withstand daily use and varying cooking conditions, ensuring long-lasting reliability.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Safety Features: Includes heat-resistant handles, stable stove feet, and secure body design to enhance user safety.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Easy Maintenance: Simplified design for straightforward cleaning and upkeep, minimizing downtime.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- portfolio solution -->
            <div class="row mb-4" data-sticky-container>
                <div class="col-md-6 order-last order-md-1">
                    <div data-sticky data-margin-top="80" data-sticky-for="767">
                        <h2>Environmental and Social Benefits</h2>
                        <ul class="list-group list-group-borderless list-group-icon-primary-bg">
                            <li class="list-group-item"><i class="fa fa-check"></i>Climate Impact: Reduces greenhouse gas emissions and supports climate resilience efforts.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Cost Savings: Helps schools save on fuel costs while promoting sustainable practices.</li>
                            <li class="list-group-item"><i class="fa fa-check"></i>Health Benefits: Improves indoor air quality, reducing health risks associated with traditional cooking methods.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-last">
                    <a class="mb-4 d-block" href="assets/images/portfolio/04.jpg" data-glightbox="" data-gallery="portfolio"><img src="assets/images/prod-2a.jpg" alt=""></a>
                </div>
            </div>

            <!-- portfolio features -->
            <div class="row">
                <!-- feature 1 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-settings"></i></div>
                        <h3 class="feature-box-title">Efficient and Sustainable</h3>
                        <p class="feature-box-desc">Our school cooking solution is designed for efficiency and sustainability, optimizing fuel consumption and reducing environmental impact.</p>
                    </div>
                </div>
                <!-- feature 2 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-support"></i></div>
                        <h3 class="feature-box-title">Durable and Reliable</h3>
                        <p class="feature-box-desc">Built with high-quality materials and advanced engineering, our stove is designed to withstand the rigorous demands of school cooking environments.</p>
                    </div>
                </div>
                <!-- feature 3 -->
                <div class="col-md-4">
                    <div class="feature-box h-100 icon-primary">
                        <div class="feature-box-icon"><i class="ti-bolt"></i></div>
                        <h3 class="feature-box-title">Safe and User-Friendly</h3>
                        <p class="feature-box-desc">With heat-resistant handles, stable stove feet, and a secure body design, our stove prioritizes user safety and ease of use.</p>
                    </div>
                </div>
            </div>

            <!-- portfolio additional details -->
            <div class="row my-4">
                <div class="col-md-12">
                    <p>Join Bevis Africa in our mission to combat climate change and promote sustainable cooking practices in educational institutions. Our climate-friendly school cooking solution offers a reliable, efficient, and safe way to meet the cooking needs of schools while reducing environmental impact and supporting climate resilience efforts. By choosing our stove, you're not only investing in a high-quality cooking solution but also contributing to a greener future for generations to come.</p>
                </div>
                <div class="col-md-12 text-center">
                    <a class="btn btn-grad mt-4 mb-5" href="contact.php" style="width: 200px; margin: 0 auto;">Contact Us for Pricing</a>
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
            <h3>Climate-Friendly School Cooking Solution</h3>
            <a class="btn btn-grad" href="contact.php">Contact Us</a>
        </div>
    </div>

    <!-- Footer, CTA -->
    <?php include 'includes/footer.php'; ?>

    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>
</body>

</html>