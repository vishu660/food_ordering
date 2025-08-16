<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

// URL se ID lo
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $item = $userObj->getMenuItemById($id);
    if(!$item){
        die("Item not found!");
    }
 } else {
    die("Item ID not provided!");
 }
?>
<?php include 'includes/header.php'; ?>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class=" border-0 rounded-3">
                <div class="card-header text-dark text-center">
                    <h4>Edit Menu Item</h4>
                </div>
                <div class="card-body">
                    <form action="update_item.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $item['id'] ?>">

                        <div class="mb-3">
                            <label class="form-label">Item Name</label>
                            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($item['name']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" class="form-control" rows="3" required><?= htmlspecialchars($item['description']) ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price (₹)</label>
                            <input type="number" step="0.01" name="price" class="form-control" value="<?= $item['price'] ?>" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Image</label><br>
                            <?php if($item['image']): ?>
                                <img src="../uploads/<?= $item['image'] ?>" width="100" class="mb-2 rounded"><br>
                            <?php endif; ?>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-secondary btn-lg">Update Item</button>
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
