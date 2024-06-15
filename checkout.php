<!doctype html>
<html lang="en">

<head>
    <title>Checkout | Bevis Africa</title>

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
Checkout -->
    <section class="p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 mx-auto">
                    <div class="bg-white p-4 p-md-5 my-5">
                        <h2 class="mb-4">Checkout</h2>
                        <form>
                            <h5 class="mb-3">Billing Details</h5>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="lastName" required>
                                </div>
                                <div class="col-12">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" required>
                                </div>
                                <div class="col-md-5">
                                    <label for="country" class="form-label">Country</label>
                                    <select class="form-select" id="country" required>
                                        <option value="">Choose...</option>
                                        <option>Kenya</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="zip" class="form-label">Zip</label>
                                    <input type="text" class="form-control" id="zip" required>
                                </div>
                            </div>
                            <hr class="my-4">
                            <h5 class="mb-3">Payment</h5>
                            <div class="my-3">
                                <div class="form-check">
                                    <input id="mpesa" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                    <label class="form-check-label" for="mpesa">M-Pesa</label>
                                </div>
                                <div class="form-check">
                                    <input id="card" name="paymentMethod" type="radio" class="form-check-input" required>
                                    <label class="form-check-label" for="card">Credit/Debit Card</label>
                                </div>
                            </div>
                            <div class="row gy-3">
                                <div class="col-md-6">
                                    <label for="cc-name" class="form-label">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                    <small class="text-muted">Full name as displayed on card</small>
                                </div>
                                <div class="col-md-6">
                                    <label for="cc-number" class="form-label">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="cc-expiration" class="form-label">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="cc-cvv" class="form-label">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                </div>
                            </div>
                            <hr class="my-4">
                            <button class="btn btn-dark w-100 mb-4" type="submit">Place Order</button>
                            <a href="cart.php" class="btn btn-link w-100">Return to Cart</a>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="bg-light p-4 sticky-top">
                        <h5 class="mb-3">Order Summary</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h6 class="my-0">Eco-Friendly Jiko</h6>
                                    <small class="text-muted">Quantity: 1</small>
                                </div>
                                <span class="text-muted">$99.99</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center mb-3">
                                <div>
                                    <h6 class="my-0">Shipping</h6>
                                    <small class="text-muted">Standard Delivery</small>
                                </div>
                                <span class="text-muted">$9.99</span>
                            </li>
                            <li class="d-flex justify-content-between align-items-center">
                                <span>Total (USD)</span>
                                <strong>$109.98</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
Checkout -->


    <!-- Footer, CTA -->
    <?php include 'includes/footer.php'; ?>


    <!-- Scripts -->
    <?php include 'includes/scripts.php'; ?>


</body>

</html>