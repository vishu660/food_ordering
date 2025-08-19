<?php include 'includes/header.php'; ?>

<h2 class="mb-4 fw-bold">🍔 Manage Menu Items</h2>

<!-- Add New Item Button -->
<a href="#" class="btn btn-success mb-3">
    <i class="bi bi-plus-circle"></i> Add New Item
</a>

<!-- Menu Table -->
<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                <tr>
                    <td>1</td>
                    <td><strong>Burger</strong></td>
                    <td>₹150</td>
                    <td><span class="badge bg-info text-dark">Fast Food</span></td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i> Delete
                        </a>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr>
                    <td>2</td>
                    <td><strong>Pizza</strong></td>
                    <td>₹250</td>
                    <td><span class="badge bg-warning text-dark">Italian</span></td>
                    <td><span class="badge bg-success">Active</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i> Delete
                        </a>
                    </td>
                </tr>
                <!-- Row 3 -->
                <tr>
                    <td>3</td>
                    <td><strong>Salad</strong></td>
                    <td>₹120</td>
                    <td><span class="badge bg-success">Healthy</span></td>
                    <td><span class="badge bg-secondary">Inactive</span></td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil-square"></i> Edit
                        </a>
                        <a href="#" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i> Delete
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
