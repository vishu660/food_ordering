<?php include '../includes/header.php'; ?>

<div class="container py-5">
    <div class="row">
        <!-- Product Image -->
        <div class="col-md-5">
            <div class="card shadow-sm border-0">
                <img src="assets/images/burger.jpg" class="card-img-top rounded" alt="Product">
            </div>
        </div>

        <!-- Product Info -->
        <div class="col-md-7">
            <h2 class="fw-bold mb-3">Cheese Burger</h2>
            <h4 class="text-danger mb-3">₹150</h4>
            <p class="text-muted mb-4">
                Delicious cheesy burger with fresh lettuce, tomato, and a juicy patty. 
                Perfect for your cravings 🍔
            </p>

            <!-- Quantity Selector -->
            <div class="d-flex align-items-center mb-4">
                <label class="me-2 fw-bold">Quantity:</label>
                <input type="number" value="1" min="1" class="form-control" style="width:100px;">
            </div>

            <!-- Buttons -->
            <div class="d-flex">
                <a href="cart.php" class="btn btn-outline-danger me-3">Add to Cart</a>
                <a href="checkout.php" class="btn btn-danger">Buy Now</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
