<?php include 'includes/header.php'; ?>
<h2 class="mb-4">Manage Offers & Discounts</h2>
<a href="#" class="btn btn-success mb-3">+ Add New Offer</a>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>Offer Code</th>
            <th>Discount</th>
            <th>Valid Till</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>NEW50</td>
            <td>50%</td>
            <td>31-08-2025</td>
            <td>Active</td>
            <td>
                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
<?php include 'includes/footer.php'; ?>
