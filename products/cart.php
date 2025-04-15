<?php 
require "../config/config.php";
require "../includes/header.php";

// Ensure output buffering is enabled
ob_start();

// Redirect if user is not logged in
if (!isset($_SESSION['user_id'])) {
    header("location: " . APPURL . "");
    exit;
}

// Get cart products
$products = $conn->prepare("SELECT * FROM cart WHERE user_id = :user_id");
$products->bindParam(':user_id', $_SESSION['user_id']);
$products->execute();
$allProducts = $products->fetchAll(PDO::FETCH_OBJ);

// Calculate cart total
$cartTotal = $conn->prepare("SELECT SUM(quantity * price) AS total FROM cart WHERE user_id = :user_id");
$cartTotal->bindParam(':user_id', $_SESSION['user_id']);
$cartTotal->execute();
$allCartTotal = $cartTotal->fetch(PDO::FETCH_OBJ);

// Calculate total price
$total_price = ($allCartTotal->total ?? 0) + 10 - 3;

// Proceed to checkout
if (isset($_POST['checkout'])) {
    $_SESSION['total_price'] = $total_price; // Set session variable
    header("Location: ../products/checkout.php");
    exit;
}

ob_end_flush(); // Flush output buffer
?>

<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(<?php echo APPURL; ?>/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row slider-text justify-content-center align-items-center">
                <div class="col-md-7 col-sm-12 text-center ftco-animate">
                    <h1 class="mb-3 mt-5 bread">Cart</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo APPURL; ?>">Home</a></span> <span>Cart</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <?php if (count($allProducts) > 0) : ?>
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allProducts as $product) : ?>
                                    <tr class="text-center">
                                        <td class="product-remove"><a href="delete-product.php?id=<?php echo $product->id; ?>"><span class="icon-close"></span></a></td>
                                        <td class="image-prod"><div class="img" style="background-image:url(<?php echo IMAGEPRODUCTS; ?>/<?php echo $product->image; ?>);"></div></td>
                                        <td class="product-name">
                                            <h3><?php echo $product->name; ?></h3>
                                            <p><?php echo $product->description; ?></p>
                                        </td>
                                        <td class="price">RM <?php echo number_format($product->price, 2); ?></td>
                                        <td>
                                            <div class="input-group mb-3">
                                                <input disabled type="text" name="quantity" class="quantity form-control input-number" value="<?php echo $product->quantity; ?>" min="1" max="100">
                                            </div>
                                        </td>
                                        <td class="total">RM <?php echo number_format($product->price * $product->quantity, 2); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else : ?>
                        <p>Your cart is empty, add products.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col col-lg-3 col-md-6 mt-5 cart-wrap ftco-animate">
                <div class="cart-total mb-3">
                    <h3>Cart Totals</h3>
                    <p class="d-flex">
                        <span>Subtotal</span>
                        <span>RM <?php echo number_format($allCartTotal->total ?? 0, 2); ?></span>
                    </p>
                    <p class="d-flex">
                        <span>Delivery</span>
                        <span>RM 10.00</span>
                    </p>
                    <p class="d-flex">
                        <span>Discount</span>
                        <span>RM 3.00</span>
                    </p>
                    <hr>
                    <p class="d-flex total-price">
                        <span>Total</span>
                        <span>RM <?php echo number_format($total_price, 2); ?></span>
                    </p>
                </div>
                <form method="POST">
                    <input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
                    <?php if ($allCartTotal->total > 0) : ?>
                        <button style="background-color: black;" name="checkout" type="submit" class="btn btn-primary py-3 px-5">Proceed to Checkout</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require "../includes/footer.php"; ?>
