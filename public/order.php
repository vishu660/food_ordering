<?php include '../includes/header.php'; ?>

<div class="container py-5">
  <h2 class="mb-4 text-center">📦 My Orders</h2>

  <!-- Order 1 -->
  <div class="card mb-4 order-card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <h5 class="card-title">Order #1012</h5>
        <span class="order-status status-delivered">Delivered</span>
      </div>
      <p class="text-muted">Placed on: 15 Aug 2025</p>

      <!-- Products -->
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between">
          Pizza Margherita × 2 <span>₹598</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          Coke 500ml × 1 <span>₹60</span>
        </li>
        <!-- Discount Row -->
        <li class="list-group-item d-flex justify-content-between text-success fw-bold">
          Discount (SUMMER50) <span>- ₹100</span>
        </li>
      </ul>

      <!-- Totals -->
      <div class="d-flex justify-content-between">
        <span>Final Total: <strong>₹558</strong></span>
        <a href="#" class="btn btn-outline-primary btn-sm">View Details</a>
      </div>
    </div>
  </div>

  <!-- Order 2 -->
  <div class="card mb-4 order-card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <h5 class="card-title">Order #1013</h5>
        <span class="order-status status-pending">Pending</span>
      </div>
      <p class="text-muted">Placed on: 16 Aug 2025</p>

      <!-- Products -->
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between">
          Chicken Burger × 1 <span>₹199</span>
        </li>
        <li class="list-group-item d-flex justify-content-between">
          Fries × 1 <span>₹99</span>
        </li>
        <!-- Discount Row -->
        <li class="list-group-item d-flex justify-content-between text-success fw-bold">
          Offer Applied (Weekend Special) <span>- ₹50</span>
        </li>
      </ul>

      <!-- Totals -->
      <div class="d-flex justify-content-between">
        <span>Final Total: <strong>₹248</strong></span>
        <a href="#" class="btn btn-outline-primary btn-sm">Track Order</a>
      </div>
    </div>
  </div>

  <!-- Order 3 -->
  <div class="card mb-4 order-card">
    <div class="card-body">
      <div class="d-flex justify-content-between">
        <h5 class="card-title">Order #1014</h5>
        <span class="order-status status-cancelled">Cancelled</span>
      </div>
      <p class="text-muted">Placed on: 17 Aug 2025</p>

      <!-- Products -->
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between">
          Pasta Alfredo × 1 <span>₹249</span>
        </li>
        <!-- Discount Row -->
        <li class="list-group-item d-flex justify-content-between text-success fw-bold">
          Coupon Applied (WELCOME20) <span>- ₹20</span>
        </li>
      </ul>

      <!-- Totals -->
      <div class="d-flex justify-content-between">
        <span>Final Total: <strong>₹229</strong></span>
        <a href="#" class="btn btn-outline-secondary btn-sm disabled">Not Available</a>
      </div>
    </div>
  </div>

</div>

<?php include '../includes/footer.php'; ?>
