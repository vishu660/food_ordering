
<?php
    include '../includes/config.php';
    require '../classes/Items.php';

    $userObj = new Items($conn);
    $menuItems = $userObj->getMenu();
?>

<?php include 'includes/header.php'; ?>

<h2 class="mb-4">Manage Menu Items</h2>
<a href="add_menu.php" class="btn btn-success mb-3">+ Add New Item</a>
<?php if(isset($_GET['msg'])): ?>
    <div class="alert alert-success">
        <?= htmlspecialchars($_GET['msg'])?>
    </div>
<?php endif; ?>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Item</th>
            <th>Description</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($menuItems as $item) : ?>
            <tr>
                <td><?= $item['id']?></td>
                <td><?= $item['name']?></td>
                <td><?= $item['description']?></td>
                <td><?= $item['price']?></td>
                <td>
                    <?php if (!empty($item['image'])): ?>
                        <img src="../uploads/<?= htmlspecialchars($item['image']) ?>" alt="Menu Image" width="80">
                    <?php else: ?>
                        <span>No Image</span>
                    <?php endif; ?>
                </td>
                <td>
                    <a href="edit_item.php?id=<?= $item['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete_item.php?id=<?= $item['id'] ?>" class="btn btn-danger btn-sm"
                    onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
=======

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
