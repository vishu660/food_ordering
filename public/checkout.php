<?php include '../includes/header.php'; ?>

<div class="container py-5">
    <h2 class="mb-4">Checkout</h2>
    <div class="row">
        <!-- Address Form -->
        <div class="col-md-7">
            <div class="card p-4 shadow-sm mb-4">
                <h5 class="mb-3">Delivery Address</h5>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Mobile Number</label>
                        <input type="tel" class="form-control" placeholder="Enter mobile number" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Address</label>
                        <textarea class="form-control" rows="3" placeholder="Enter your address" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Enter city" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pincode</label>
                        <input type="text" class="form-control" placeholder="Enter pincode" required>
                    </div>
                </form>
            </div>

            <div class="card p-4 shadow-sm">
                <h5 class="mb-3">Payment Method</h5>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="payment" id="cod" checked>
                    <label class="form-check-label" for="cod">Cash on Delivery</label>
                </div>
                <div class="form-check mb-2">
                    <input class="form-check-input" type="radio" name="payment" id="upi">
                    <label class="form-check-label" for="upi">UPI / Google Pay / PhonePe</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment" id="card">
                    <label class="form-check-label" for="card">Credit/Debit Card</label>
                </div>
            </div>
        </div>

        <!-- Order Summary -->
        <div class="col-md-5">
            <div class="card p-4 shadow-sm">
                <h5 class="mb-3">Order Summary</h5>
                <div class="d-flex justify-content-between mb-2">
                    <span>Cheese Burger × 1</span>
                    <span>₹150</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Veg Pizza × 2</span>
                    <span>₹500</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between mb-2">
                    <span>Subtotal</span>
                    <span>₹650</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span>Delivery</span>
                    <span>₹50</span>
                </div>
                <hr>
                <div class="d-flex justify-content-between fw-bold">
                    <span>Total</span>
                    <span>₹700</span>
                </div>
                <button class="btn btn-danger w-100 mt-3">Place Order</button>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
