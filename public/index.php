<?php include '../includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Text -->
            <div class="col-md-6 hero-text">
                <h1>It’s Not Just Food,<br> It’s an Experience 🍽️</h1>
                <p class="mt-3">Order your favorite meals from Foody and enjoy fast delivery to your doorstep.</p>
                <div class="mt-4">
                    <a href="menu.php" class="btn btn-danger me-2">View Menu</a>
                    <a href="contact.php" class="btn btn-outline-danger">Book a Table</a>
                </div>
            </div>
            <!-- Image -->
            <div class="col-md-6 text-center">
                <img src="assets/images/hero-food.jpg" class="img-fluid rounded" alt="Delicious Food">
            </div>
        </div>
    </div>
</section>

<!-- Featured Dishes -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Featured Dishes</h2>
        <div class="row g-4">
            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <img src="assets/images/burger.jpg" class="card-img-top" alt="Cheese Burger">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Cheese Burger</h5>
                        <p class="text-danger fw-bold">₹150</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <img src="assets/images/pizza.jpg" class="card-img-top" alt="Veggie Pizza">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Veggie Pizza</h5>
                        <p class="text-danger fw-bold">₹250</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <img src="assets/images/pasta.jpg" class="card-img-top" alt="Pasta Alfredo">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Pasta Alfredo</h5>
                        <p class="text-danger fw-bold">₹200</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="card shadow-sm border-0 h-100">
                    <img src="assets/images/salad.jpg" class="card-img-top" alt="Fresh Salad">
                    <div class="card-body text-center">
                        <h5 class="card-title fw-bold">Fresh Salad</h5>
                        <p class="text-danger fw-bold">₹120</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
