<?php
session_start();
require "includes/connect.php";
include "includes/cart.php";

if(isset($_SESSION['uid'])){
    $uid = $_SESSION['uid'];
    $qry = "SELECT * FROM cart JOIN product ON product.product_id=cart.product_id WHERE cart.user_id='$uid' ORDER BY cart.cart_id DESC";
}elseif(isset($_COOKIE['cart'])){
    $uid = $_COOKIE['cart'];
    $qry = "SELECT * FROM cart JOIN product ON product.product_id=cart.product_id WHERE cart.browser_id='$uid' ORDER BY cart.cart_id DESC";
}
$total = 0;
$res = $pdo->query($qry);
$quickordurl = "Hello, I visited your website and would like to make an order for: ";
?>
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
                        <?php if($res->num_rows == 0){?>
                                <div class="col-12 p-2 text-center">
                                    <div class="py-5 shadow">
                                        <span class="text-bold h5 my-2">Your Shopping Cart is Empty!</span><br/>
                                        <span>Please click below to start shopping.</span><br/>
                                        <a href="index.php#products" class="btn btn-primary btn-shadow btn-rounded btn-lg my-2"><span class="text-white">Go Shopping</span></a>
                                    </div>
                                </div>
                            <?php }else{?>
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
                                                    <?php while($row = $res->fetch_assoc()){
                                            $imgqry = "SELECT * FROM prod_img WHERE type='0' AND product_id =".$row['product_id'];
                                            $imgres = $pdo->query($imgqry);
                                            if($imgres->num_rows > 0){
                                                $imgrow = $imgres->fetch_assoc();
                                                $img = $imgrow['image'];
                                            }else{
                                                $img = "placeholder.png";
                                            }
                                            $subtotal = $row['price']*$row['cart_quantity'];
                                            $total = $total+$subtotal;

                                            $quickordurl .= ">".$row['name']." -SKU".$row['product_id'].". ";
                                            ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="products/<?php echo $img;?>" alt="<?php echo $row['name'];?>" class="img-fluid rounded" width="60">
                                                <div class="ms-3">
                                                    <h6 class="mb-0"><?php echo $row['name'];?></h6>
                                                    <small class="text-muted">SKU: BA-00<?php echo $row['product_id'];?></small>
                                                </div>
                                            </div>
                                        </td>
                                        <td>Ksh. <?php echo number_format($row['price']);?></td>
                                        <td>
                                        <form method="POST" action="processes/cartprocesses.php">
                                            <input type="number" class="form-control" value="<?php echo $row['cart_quantity'];?>" min="1" max="<?php echo $row['quantity'];?>" name="adjqty"  step="1" data-decimals="0"  onchange="this.form.submit();" required>
                                            <input type="hidden" name="cid" value="<?php echo $row['cart_id'];?>"/>
                                        </form>
                                        </td>
                                        <td>Ksh. <?php echo number_format($subtotal);?></td>
                                        <td>
                                        <a href="processes/cartprocesses.php?removeitem=<?php echo $row['cart_id'];?>" onclick="removealert()" class="btn btn-link text-danger"><i class="ti-close"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <?php } ?>
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <a href="index.php#products" class="btn btn-link">Continue Shopping</a>
                            <div>
                                <span class="me-3">Subtotal: <strong>Ksh <?php echo number_format($total);?></strong></span>
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