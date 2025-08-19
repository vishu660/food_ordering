<?php include 'includes/header.php'; ?>

<h1 class="mb-4 fw-bold">📊 Dashboard</h1>

<!-- Summary Cards -->
<div class="row g-4">
    <div class="col-md-3">
        <div class="dashboard-card card-blue">
            <div>
                <h5>Total Orders</h5>
                <p class="fs-3 fw-bold">120</p>
            </div>
            <i class="bi bi-bag-check-fill"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-card card-green">
            <div>
                <h5>Menu Items</h5>
                <p class="fs-3 fw-bold">15</p>
            </div>
            <i class="bi bi-journal-text"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-card card-yellow">
            <div>
                <h5>Users</h5>
                <p class="fs-3 fw-bold">50</p>
            </div>
            <i class="bi bi-people-fill"></i>
        </div>
    </div>
    <div class="col-md-3">
        <div class="dashboard-card card-red">
            <div>
                <h5>Offers</h5>
                <p class="fs-3 fw-bold">3</p>
            </div>
            <i class="bi bi-tag-fill"></i>
        </div>
    </div>
</div>

<!-- Recent Orders Table -->
<div class="card mt-5 shadow-sm">
    <div class="card-header bg-dark text-white">
        Recent Orders
    </div>
    <div class="card-body">
        <table class="table table-hover align-middle">
            <thead>
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
                    <td><span class="badge bg-warning text-dark">Pending</span></td>
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
