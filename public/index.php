<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

// Menu items fetch karo
$menuItems = $userObj->getAllMenuItems(); // ⚡️ Ye method User class me likhna hoga agar abhi nahi hai
?>


<?php include '../includes/header.php'; ?>
<style>
    img.card-img-top-item {
    height: 75% !important;
}
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <?php if (!empty($menuItems)): ?>
                <?php foreach ($menuItems as $index => $item): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <!-- Background Image with Overlay -->
                        <div class="hero-slide d-flex align-items-center justify-content-center text-center text-md-start" 
                             style="background: url('../uploads/<?= $item['image'] ?>') center/cover no-repeat; position: relative;">
                             
                            <div class="overlay"></div>

                            <!-- Content -->
                            <div class="container position-relative z-2">
                                <h1 class="display-3 fw-bold text-white animate__animated animate__fadeInDown">
                                    <?= htmlspecialchars($item['name']) ?> 🍴
                                </h1>
                                <p class="lead text-light mt-3 animate__animated animate__fadeInUp animate__delay-1s">
                                    <?= htmlspecialchars($item['description']) ?>
                                </p>
                                <p class="fw-bold text-warning fs-2 animate__animated animate__zoomIn animate__delay-2s">
                                    ₹<?= $item['price'] ?>
                                </p>
                                <div class="mt-4">
                                    <a href="menu.php" 
                                       class="btn btn-warning btn-lg me-2 shadow animate__animated animate__fadeInLeft animate__delay-3s">
                                        Order Now
                                    </a>
                                    <a href="contact.php" 
                                       class="btn btn-outline-light btn-lg shadow animate__animated animate__fadeInRight animate__delay-3s">
                                        Book a Table
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="carousel-item active">
                    <div class="hero-slide d-flex align-items-center justify-content-center text-center"
                         style="background: #222; min-height: 100vh;">
                        <h2 class="text-white">No items found in menu!</h2>
                    </div>
                </div>
            <?php endif; ?>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>
</section>



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
                                        <div class="card shadow-sm border-0 h-100 image-height">
                                            <img src="../uploads/<?= $item['image'] ?>" class="card-img-top-item" alt="<?= htmlspecialchars($item['name']) ?>">
                                            <div class="card-body text-center">
                                                <h5 class="card-title fw-bold"><?= htmlspecialchars($item['name']) ?></h5>
                                                <p class="text-danger fw-bold">₹<?= $item['price'] ?></p>
                                            </div>
                                        </div>
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

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
            </button>
        </div>
    </div>
</section>


<?php include '../includes/footer.php'; ?>
