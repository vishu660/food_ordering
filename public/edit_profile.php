<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);
$userId = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$userData = $userObj->get_UserById($userId);

$message = "";

// Profile Update Request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = !empty($_POST['password']) ? $_POST['password'] : null;

    if ($userObj->updateUserProfile($userId, $name, $email, $password)) {
        $message = "<div class='alert alert-success'>✅ Profile updated successfully!</div>";
        $userData = $userObj->get_UserById($userId); // Refresh updated data
    } else {
        $message = "<div class='alert alert-danger'>❌ Failed to update profile!</div>";
    }
}
?>

<?php include '../includes/header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- Profile Card -->
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-body p-4">
                    <h3 class="mb-3 text-center text-primary">
                        <i class="bi bi-person-circle"></i> <?= htmlspecialchars($userData['username']); ?>'s Profile
                    </h3>

                    <?= $message; ?>

                    <?php if ($userData): ?>
                        <form method="POST" class="mt-3">
                            <div class="mb-3">
                                <label class="form-label">Full Name</label>
                                <input type="text" name="username" class="form-control rounded-3" 
                                       value="<?= htmlspecialchars($userData['username']); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Email Address</label>
                                <input type="email" name="email" class="form-control rounded-3" 
                                       value="<?= htmlspecialchars($userData['email']); ?>" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">New Password (optional)</label>
                                <input type="password" name="password" class="form-control rounded-3" placeholder="Enter new password">
                            </div>

                            <button type="submit" class="btn btn-primary w-100 rounded-3">
                                <i class="bi bi-save"></i> Update Profile
                            </button>
                        </form>

                        <hr class="my-4">

                        <p class="text-muted text-center mb-0">
                            <small>Account Created: <?= htmlspecialchars($userData['created_at']); ?></small>
                        </p>
                    <?php else: ?>
                        <p class="text-danger text-center">❌ User not found.</p>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
