
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
<?php include '../includes/header.php'; ?>

<div class="container py-5">
    <div class="row">
        <!-- Profile Info -->
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3 p-4">
                <h4 class="fw-bold mb-3 text-center">My Profile</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>👤 Name:</strong> Vishal Sain</li>
                    <li class="list-group-item"><strong>📧 Email:</strong> vishal@example.com</li>
                    <li class="list-group-item"><strong>📞 Phone:</strong> +91 9876543210</li>
                    <li class="list-group-item"><strong>📍 Address:</strong> Model Town, Punjab</li>
                    <li class="list-group-item"><strong>🔑 Role:</strong> User</li>
                </ul>
                <a href="edit-profile.php" class="btn btn-danger w-100 mt-3">Edit Profile</a>
            </div>
        </div>

        <!-- Orders -->
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-3 p-4">
                <h4 class="fw-bold mb-3">My Orders</h4>
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-danger text-dark">
                            <tr>
                                <th>Order ID</th>
                                <th>Items</th>
                                <th>Total</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#1001</td>
                                <td>Cheese Burger × 1, Pizza × 2</td>
                                <td><strong>₹700</strong></td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>2025-08-10</td>
                            </tr>
                            <tr>
                                <td>#1002</td>
                                <td>Pasta × 1, Salad × 1</td>
                                <td><strong>₹400</strong></td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td>2025-08-15</td>
                            </tr>
                            <tr>
                                <td>#1003</td>
                                <td>Veg Pizza × 1</td>
                                <td><strong>₹250</strong></td>
                                <td><span class="badge bg-danger">Cancelled</span></td>
                                <td>2025-08-16</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
