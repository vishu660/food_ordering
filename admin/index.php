<?php include 'includes/header.php'; ?>

<h1 class="mb-4">Dashboard</h1>

<!-- Summary Cards -->
<div class="row">
    <div class="col-md-3">
        <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
                <h5>Total Orders</h5>
                <p class="fs-3">120</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
                <h5>Menu Items</h5>
                <p class="fs-3">15</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
                <h5>Users</h5>
                <p class="fs-3">50</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
                <h5>Offers</h5>
                <p class="fs-3">3</p>
            </div>
        </div>
    </div>
</div>

<!-- Recent Orders Table -->
<div class="card mt-4">
    <div class="card-header bg-dark text-white">
        Recent Orders
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Items</th>
                    <th>Total</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>#101</td>
                    <td>Vishal</td>
                    <td>Burger, Pizza</td>
                    <td>₹400</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                </tr>
                <tr>
                    <td>#102</td>
                    <td>Rahul</td>
                    <td>Pasta</td>
                    <td>₹200</td>
                    <td><span class="badge bg-success">Delivered</span></td>
                </tr>
                <tr>
                    <td>#103</td>
                    <td>Priya</td>
                    <td>Salad</td>
                    <td>₹150</td>
                    <td><span class="badge bg-danger">Cancelled</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
