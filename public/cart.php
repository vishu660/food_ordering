<?php include '../includes/header.php'; ?>

<div class="container py-5">
    <h2 class="mb-4">My Cart</h2>

    <!-- Cart Table -->
    <div class="table-responsive">
        <table class="table table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Image</th>
                    <th>Item</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="assets/images/burger.jpg" width="60"></td>
                    <td>Cheese Burger</td>
                    <td>₹150</td>
                    <td>
                        <input type="number" value="1" min="1" class="form-control" style="width:80px;">
                    </td>
                    <td>₹150</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger">Remove</a>
                    </td>
                </tr>
                <tr>
                    <td><img src="assets/images/pizza.jpg" width="60"></td>
                    <td>Veg Pizza</td>
                    <td>₹250</td>
                    <td>
                        <input type="number" value="2" min="1" class="form-control" style="width:80px;">
                    </td>
                    <td>₹500</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-danger">Remove</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Cart Summary -->
    <div class="row justify-content-end mt-4">
        <div class="col-md-4">
            <div class="card p-3 shadow-sm">
                <h5>Cart Summary</h5>
                <p class="mb-1">Subtotal: ₹650</p>
                <p class="mb-1">Delivery: ₹50</p>
                <h5>Total: ₹700</h5>
                <a href="checkout.php" class="btn btn-danger w-100 mt-3">Proceed to Checkout</a>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
