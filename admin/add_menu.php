<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

$file = isset($_FILES['image']) ? $_FILES['image'] : null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($userObj->addMenuItem($_POST, $file)) {
        $msg = "Menu item added successfully!";
    } else {
        $msg = "Failed to add menu item.";
    }
}
?>

<?php include 'includes/header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <?php if (!empty($msg)): ?>
                <div class="alert alert-info">
                    <?= $msg; ?>
                </div>
            <?php endif; ?>

            <div class=" border-0 rounded-3">
                <div class="card-header  text-dark text-center">
                    <h4>Add Menu Item</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="add_menu.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label">Item Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" placeholder="Enter Description" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price (₹)</label>
                            <input type="number" name="price" class="form-control" placeholder="Enter Price" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Upload Image</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="d-grid mb-2">
                            <button type="submit" name="submit" class="btn btn-secondary btn-lg">Save Item</button>
                        </div>

                        <div class="d-grid">
                            <a href="menu.php" class="btn btn-outline-primary btn-lg">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
