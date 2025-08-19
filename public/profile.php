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
