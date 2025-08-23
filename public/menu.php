<?php
include '../includes/config.php';
require '../classes/Items.php';
require '../classes/Order.php';

$user_id = 1; // demo ke liye, login user id yaha daale

$itemsObj = new Items($conn);
$orderObj = new Order($conn);

// Menu items fetch
$menuItems = $itemsObj->getAllMenuItems();

// Handle Add to Cart
if(isset($_POST['add_to_cart'])){
    $item_id = $_POST['item_id'];
    $quantity = $_POST['quantity'];
    $orderObj->addToCart($user_id, $item_id, $quantity);
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>


<?php include '../includes/header.php'; ?>

<style>
    img.card-img-top-item {
    height: 75% !important;
}
</style>

<main class="container py-5">
    <h1 class="text-center mb-5">Our Menu 📜</h1>
    <!-- Featured Dishes -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Featured Dishes</h2>

        <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php if (!empty($menuItems)): ?>
                    <?php 
                        // har slide me 4 item dikhane ke liye
                        $chunks = array_chunk($menuItems, 4); 
                        foreach ($chunks as $index => $chunk): 
                    ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <div class="row g-4">
                                <?php foreach ($chunk as $item): ?>
                                    <div class="col-md-3 col-sm-6">
                                        <a href="product-details.php?id=<?= $item['id'] ?>">
                                        <div class="card shadow-sm border-0 h-100">
                                            <img src="../uploads/<?= $item['image'] ?>" class="card-img-top-item" alt="<?= htmlspecialchars($item['name']) ?>">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fw-bold"><?= htmlspecialchars($item['name']) ?></h5>
                                                <p class="text-danger fw-bold">₹<?= $item['price'] ?></p>

                                                <!-- Add to Cart Form -->
                                                <form method="post" class="mt-2">
                                                    <input type="hidden" name="item_id" value="<?= $item['id'] ?>">
                                                    <input type="number" name="quantity" value="1" min="1" class="form-control mb-2" style="width:80px; margin:auto;">
                                                    <button type="submit" name="add_to_cart" class="btn btn-primary btn-sm w-100">Add to Cart</button>
                                                </form>
                                            </div>
                                        </div>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <div class="carousel-item active">
                        <div class="text-center p-5">
                            <h4 class="text-muted">No featured dishes found!</h4>
                        </div>
                    </div>
                <?php endif; ?>
        <!-- Menu Item 1 -->
       
</section>
</main>
<?php include '../includes/footer.php'; ?>
