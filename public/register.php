<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name']);
    $email  = trim($_POST['email']);
    $password  = trim($_POST['password']);
    $confirm_password  = trim($_POST['confirm_password']);

    if ($password !== $confirm_password) {
        $message = "<div class='alert alert-danger'>Passwords do not match!</div>";
    } else {
        $data = [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => 'user'
        ];

        if ($userObj->addUser($data)) {
            $message = "<div class='alert alert-success'>
                            Registration successful! <a href='login.php'>Login Here</a>
                        </div>";
        } else {
            $message = "<div class='alert alert-danger'>Error: Could not register. Email may already exist.</div>";
        }
    }
}
?>

<?php include '../includes/header.php'; ?>

<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Register Form -->
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4">
                        <h3 class="text-center fw-bold mb-4">Create Account</h3>

                        <?php if ($message) echo $message; ?>

                        <form action="" method="POST">
                            <div class="mb-3">
                                <label class="form-label">Full Name *</label>
                                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email *</label>
                                <input type="email" name="email" class="form-control" placeholder="your@email.com" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password *</label>
                                <input type="password" name="password" class="form-control" placeholder="********" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Confirm Password *</label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="********" required>
                            </div>
                            <button type="submit" class="btn btn-danger w-100">Register</button>
                        </form>

                        <p class="text-center mt-3 mb-0">
                            Already have an account? <a href="login.php">Login</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
