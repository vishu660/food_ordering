<?php
// Start session to check if user logged in
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody - Food Ordering</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="/core_php_food_ordering/public/assets/css/style.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .navbar { padding: 1rem 0; }
        .navbar-brand { font-size: 1.5rem; font-weight: 700; color: #e63946; }
        .navbar-nav .nav-link { font-weight: 500; color: #333; margin: 0 8px; }
        .navbar-nav .nav-link.active { color: #e63946; }
        .btn-signup { background-color: #e63946; color: #fff; padding: 8px 16px; border-radius: 25px; font-weight: 500; }
        .btn-signup:hover { background-color: #d62828; color: #fff; }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="index.php">Foody</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            </ul>

            <?php if (isset($_SESSION['user_id'])): ?>
                <!-- Agar user login hai -->
                <a href="profile.php?id=<?php echo $_SESSION['user_id']; ?>" class="btn btn-signup ms-lg-3">Profile</a>
                <a href="logout.php" class="btn btn-outline-danger ms-lg-2">Logout</a>
            <?php else: ?>
                <!-- Agar user login nahi hai -->
                <a href="login.php" class="btn btn-signup ms-lg-3">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
</nav>
