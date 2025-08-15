<?php include 'includes/header.php'; ?>
<h2 class="mb-4">Manage Menu Items</h2>
<a href="#" class="btn btn-success mb-3">+ Add New Item</a>
<table class="table table-bordered table-striped">
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
        <tr>
            <td>1</td>
            <td>Burger</td>
            <td>150</td>
            <td>Fast Food</td>
            <td>Active</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pizza</td>
            <td>250</td>
            <td>Italian</td>
            <td>Active</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
<?php include 'includes/footer.php'; ?>
