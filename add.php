<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add to Cart & Place Order</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Foodie</a>
      <button class="btn btn-outline-light">Cart (2)</button>
    </div>
  </nav>

  <!-- Products Section -->
  <div class="container my-5">
    <h2 class="mb-4 text-center">Available Items</h2>
    <div class="row g-4">
      <!-- Item Card -->
      <div class="col-md-3">
        <div class="card shadow-sm">
          <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Item">
          <div class="card-body text-center">
            <h5 class="card-title">Burger</h5>
            <p class="card-text">₹120</p>
            <button class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>
      <!-- Repeat Item -->
      <div class="col-md-3">
        <div class="card shadow-sm">
          <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Item">
          <div class="card-body text-center">
            <h5 class="card-title">Pizza</h5>
            <p class="card-text">₹250</p>
            <button class="btn btn-primary btn-sm">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Cart Section -->
  <div class="container my-5">
    <h2 class="mb-4 text-center">🛒 Your Cart</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <thead class="table-dark">
          <tr>
            <th>Item</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Total</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Burger</td>
            <td>₹120</td>
            <td><input type="number" class="form-control" value="1" min="1" style="width:80px;"></td>
            <td>₹120</td>
            <td><button class="btn btn-danger btn-sm">Remove</button></td>
          </tr>
          <tr>
            <td>Pizza</td>
            <td>₹250</td>
            <td><input type="number" class="form-control" value="2" min="1" style="width:80px;"></td>
            <td>₹500</td>
            <td><button class="btn btn-danger btn-sm">Remove</button></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Checkout Summary -->
    <div class="row">
      <div class="col-md-6 offset-md-6">
        <div class="card shadow-sm p-3">
          <h5>Order Summary</h5>
          <p>Subtotal: ₹620</p>
          <p>Discount: ₹20</p>
          <h5>Final Total: ₹600</h5>
          <button class="btn btn-success w-100">Place Order</button>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
