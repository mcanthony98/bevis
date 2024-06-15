<!doctype html>
<html lang="en">

<head>
    <title>Cart | Bevis Africa</title>

    <!-- Head Content -->
    <?php include 'includes/head-content.php'; ?>


</head>

<body>
    <div class="preloader">
        <img src="assets/images/preloader.svg" alt="Pre-loader">
    </div>

    <!-- Header -->
    <?php include 'includes/navbar.php'; ?>

    <!-- =======================
Cart -->
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="bg-white p-4 p-md-5 my-5">
                        <h2 class="mb-4">Shopping Cart</h2>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/product/jiko.jpg" alt="Eco-Friendly Jiko" class="img-fluid rounded" width="60">
                                                <div class="ms-3">
                                                    <h6 class="mb-0">Eco-Friendly Jiko</h6>
                                                    <small class="text-muted">SKU: JK-001</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>$99.99</td>
                                        <td>
                                            <input type="number" class="form-control" value="1" min="1" max="10">
                                        </td>
                                        <td>$99.99</td>
                                        <td>
                                            <button type="button" class="btn btn-link text-danger"><i class="ti-close"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="shop.php" class="btn btn-link">Continue Shopping</a>
                            <div>
                                <span class="me-3">Subtotal: <strong>$99.99</strong></span>
                                <a href="checkout.php" class="btn btn-dark">Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Cart -->



    <!-- Footer, CTA -->
    <?php include 'includes/footer.php'; ?>


    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>


</body>

</html>