
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
<?php include 'includes/footer.php'; ?>
