<?php include 'includes/header.php'; ?>
<h2 class="mb-4">Manage Orders</h2>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Items</th>
            <th>Total</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>#101</td>
            <td>Vishal</td>
            <td>Burger, Pizza</td>
            <td>₹400</td>
            <td>Pending</td>
            <td>
                <a href="#" class="btn btn-success btn-sm">Mark as Delivered</a>
                <a href="#" class="btn btn-danger btn-sm">Cancel</a>
            </td>
        </tr>
        <tr>
            <td>#102</td>
            <td>Rahul</td>
            <td>Pasta</td>
            <td>₹200</td>
            <td>Delivered</td>
            <td>
                <a href="#" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
    </tbody>
</table>
<?php include 'includes/footer.php'; ?>
