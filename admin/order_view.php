
<?php
    include '../includes/config.php';
    require '../classes/Order.php';

    $orderObj = new Order($conn);

    $orders = $orderObj->getOrderById($_GET['id']);
?>

<?php include 'includes/header.php'; ?>

<h2 <?= $order['id'] ?> - <?= $order['user_name']?></h2>
<p>Status: <?= $order['total_amount']?> | Discount: <?= $order['discount_amount']?> <?= $order['final_amount']?></p>
<h3>Items</h3>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>Item</th>
            <th>Image</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($orders['item'] as $item): ?>
            <tr>
                <td><?= $item['name'] ?></td>
                <td><img src="uploads/<?= $item['image']?>" width="50"></td>
                <td><?= $item['quantity'] ?></td>
                <td><?= $item['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'includes/footer.php'; ?>
