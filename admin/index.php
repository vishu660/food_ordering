<?php
require '../includes/config.php';
require '../classes/Items.php';
require '../classes/User.php';
require '../classes/Order.php';

$userObj = new User($conn);
$itemObj = new Items($conn);
$orderObj = new Order($conn);

$totalUsers = count($userObj->getAllUsers());
$totalItems = count($itemObj->getAllMenuItems());
$totalOrders = count($orderObj->getOrder());

$offerResult = mysqli_query($conn, "SELECT COUNT(*) as total FROM offers");
$offerRow = mysqli_fetch_assoc($offerResult);
$totalOffers = $offerRow['total'] ?? 0;

$recentOrders = $orderObj->getOrder();
?>


<?php include 'includes/header.php'; ?>

<h1 class="mb-4">Dashboard</h1>

<!-- Summary Cards -->
<div class="row">
    <div class="col-md-3">
        <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
                <h5>Total Orders</h5>
                <p class="fs-3"><?php echo $totalOrders; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
                <h5>Menu Items</h5>
                <p class="fs-3"><?php echo $totalItems; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
                <h5>Users</h5>
                <p class="fs-3"><?php echo $totalUsers; ?></p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card text-center bg-danger text-white mb-3">
            <div class="card-body">
                <h5>Offers</h5>
                <p class="fs-3"><?php echo $totalOffers; ?></p>
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
                    <th>Total</th>
                    <th>Status</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($recentOrders)) : ?>
                    <?php foreach($recentOrders as $order): ?>
                        <tr>
                            <td>#<?php echo $order['id']; ?></td>
                            <td><?php echo $order['user_name']; ?></td>
                            <td>₹<?php echo $order['final_amount']; ?></td>
                            <td>
                                <?php if($order['status'] == 'pending'): ?>
                                    <span class="badge bg-warning">Pending</span>
                                <?php elseif($order['status'] == 'delivered'): ?>
                                    <span class="badge bg-success">Delivered</span>
                                <?php elseif($order['status'] == 'cancelled'): ?>
                                    <span class="badge bg-danger">Cancelled</span>
                                <?php else: ?>
                                    <span class="badge bg-secondary"><?php echo ucfirst($order['status']); ?></span>
                                <?php endif; ?>
                            </td>
                            <td><?php echo date("d M Y", strtotime($order['created_at'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan="5" class="text-center">No recent orders</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>


<?php include 'includes/footer.php'; ?>
