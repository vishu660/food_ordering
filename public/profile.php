<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);
$userId = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$userData = $userObj->get_UserById($userId);
?>

<?php include '../includes/header.php'; ?>

<div class="container py-5">
    <?php if ($userData): ?>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                    <!-- Profile Header -->
                    <div class="card-header bg-gradient text-white text-center py-4" 
                         style="background: linear-gradient(135deg, #ff9800, #ff5722);">
                        <h2 class="mb-0"><?= htmlspecialchars($userData['username']); ?>'s Profile</h2>
                    </div>
                    
                    <!-- Profile Body -->
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <img src="https://ui-avatars.com/api/?name=<?= urlencode($userData['username']); ?>&background=ff9800&color=fff&size=100" 
                                 alt="Profile Picture" class="rounded-circle shadow">
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <b>Email:</b> <span><?= htmlspecialchars($userData['email']); ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <b>Role:</b> 
                                <span class="badge bg-primary px-3 py-2"><?= htmlspecialchars($userData['role']); ?></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <b>Created At:</b> <span><?= htmlspecialchars($userData['created_at']); ?></span>
                            </li>
                        </ul>
                    </div>

                    <!-- Card Footer -->
                    <div class="card-footer text-center bg-light">
                        <a href="edit_profile.php?id=<?= $userData['id']; ?>" class="btn btn-warning btn-sm px-4 me-2">
                            ✏️ Edit
                        </a>
                        <a href="index.php" class="btn btn-outline-secondary btn-sm px-4">
                            🔙 Back
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-danger text-center fw-bold">
            ❌ User not found.
        </div>
    <?php endif; ?>
</div>

<?php include '../includes/footer.php'; ?>
