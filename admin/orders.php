
<?php
    include '../includes/config.php';
    require '../classes/Order.php';

    $orderObj = new Order($conn);

    $orders = $orderObj->getOrder();
?>

<?php include 'includes/header.php'; ?>
<h2 class="mb-4">Manage Orders</h2>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Total</th>
            <th>Discount</th>
            <th>Final</th>
            <th>Status</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($orders as $order): ?>
            <tr>
                <td><?= $order['id'] ?></td>
                <td><?= $order['user_name'] ?></td>
                <td><?= $order['total_amout'] ?></td>
                <td><?= $order['discount_amount'] ?></td>
                <td><?= $order['final_amount'] ?></td>
                <td><?= $order['status'] ?></td>
                <td><?= $order['create_at'] ?></td>
                <td><a href="order.view?id=<?= $order['id'] ?>">View</a></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'includes/footer.php'; ?>
