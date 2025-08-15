<?php
include '../includes/header.php';
include '../includes/config.php';
session_start();




// Login process
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on role
        if ($user['role'] === 'admin') {
            header("Location: ../admin/index.php");
            exit;
        } elseif ($user['role'] === 'user') {
            header("Location: ../public/index.php");
            exit;
        }
    } else {
        $error = "Invalid email or password!";
    }
}
?>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Login Form -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="text-center fw-bold mb-4">Login</h3>

                        <?php if (!empty($error)) { ?>
                            <div class="alert alert-danger"><?= $error; ?></div>
                        <?php } ?>

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" placeholder="your@email.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password *</label>
                                <input type="password" name="password" class="form-control" placeholder="********" required>
                            </div>
                            <button type="submit" class="btn btn-danger w-100">Login</button>
                        </form>

                        <p class="text-center mt-3 mb-0">
                            Don’t have an account? <a href="register.php">Register</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
