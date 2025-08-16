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
                                        <div class="card shadow-sm border-0 h-100">
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
</main>
<?php include '../includes/footer.php'; ?>
