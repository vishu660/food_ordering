<?php include '../includes/header.php'; ?>
<main class="container py-5">
    <h1 class="text-center mb-5">Our Menu 📜</h1>
    <div class="row g-4">

        <!-- Menu Item 1 -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 h-100">
                <a href="product-details.php?id=1">
                    <img src="assets/images/burger.jpg" class="card-img-top" alt="Cheese Burger">
                </a>
                <div class="card-body text-center">
                    <a href="product-details.php?id=1" class="text-decoration-none text-dark">
                        <h5 class="card-title fw-bold">Cheese Burger</h5>
                    </a>
                    <p class="text-muted">Juicy beef patty with cheese and lettuce.</p>
                    <p class="text-danger fw-bold mb-3">₹150</p>
                    <a href="cart.php" class="btn btn-outline-danger">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Menu Item 2 -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 h-100">
                <a href="product-details.php?id=2">
                    <img src="assets/images/pizza.jpg" class="card-img-top" alt="Veggie Pizza">
                </a>
                <div class="card-body text-center">
                    <a href="product-details.php?id=2" class="text-decoration-none text-dark">
                        <h5 class="card-title fw-bold">Veggie Pizza</h5>
                    </a>
                    <p class="text-muted">Loaded with fresh vegetables and cheese.</p>
                    <p class="text-danger fw-bold mb-3">₹250</p>
                    <a href="cart.php" class="btn btn-outline-danger">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Menu Item 3 -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 h-100">
                <a href="product-details.php?id=3">
                    <img src="assets/images/pasta.jpg" class="card-img-top" alt="Pasta Alfredo">
                </a>
                <div class="card-body text-center">
                    <a href="product-details.php?id=3" class="text-decoration-none text-dark">
                        <h5 class="card-title fw-bold">Pasta Alfredo</h5>
                    </a>
                    <p class="text-muted">Creamy Alfredo pasta with mushrooms.</p>
                    <p class="text-danger fw-bold mb-3">₹200</p>
                    <a href="cart.php" class="btn btn-outline-danger">Add to Cart</a>
                </div>
            </div>
        </div>

        <!-- Menu Item 4 -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-sm border-0 h-100">
                <a href="product-details.php?id=4">
                    <img src="assets/images/salad.jpg" class="card-img-top" alt="Fresh Salad">
                </a>
                <div class="card-body text-center">
                    <a href="product-details.php?id=4" class="text-decoration-none text-dark">
                        <h5 class="card-title fw-bold">Fresh Salad</h5>
                    </a>
                    <p class="text-muted">Mix of lettuce, tomatoes, and cucumbers.</p>
                    <p class="text-danger fw-bold mb-3">₹120</p>
                    <a href="cart.php" class="btn btn-outline-danger">Add to Cart</a>
                </div>
            </div>
        </div>

    </div>
</main>
<?php include '../includes/footer.php'; ?>
