<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Foody Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <style>
      body { background-color: #f5f7fa; font-family: 'Poppins', sans-serif; }
      
      /* Sidebar */
      .sidebar {
          width: 240px;
          background: linear-gradient(180deg, #343a40 0%, #212529 100%);
          min-height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          box-shadow: 2px 0 8px rgba(0,0,0,0.2);
      }
      .sidebar h4 {
          padding: 20px;
          color: #fff;
          margin: 0;
          text-align: center;
          background: #e63946;
          font-weight: bold;
          font-size: 1.3rem;
      }
      .sidebar a {
          color: #d1d1d1;
          padding: 12px 20px;
          display: flex;
          align-items: center;
          gap: 10px;
          text-decoration: none;
          transition: all 0.3s;
          font-weight: 500;
      }
      .sidebar a:hover {
          background-color: #e63946;
          color: #fff;
          padding-left: 25px;
      }
      .sidebar a.active {
          background-color: #d62828;
          color: #fff;
      }

      /* Main Content */
      .main-content {
          margin-left: 240px;
          padding: 25px;
      }

      /* Dashboard Cards */
      .dashboard-card {
          border-radius: 15px;
          padding: 25px;
          color: #fff;
          box-shadow: 0 6px 12px rgba(0,0,0,0.15);
          display: flex;
          align-items: center;
          justify-content: space-between;
      }
      .dashboard-card i {
          font-size: 2.5rem;
          opacity: 0.8;
      }
      .card-blue { background: #007bff; }
      .card-green { background: #28a745; }
      .card-yellow { background: #ffc107; color: #333; }
      .card-red { background: #dc3545; }

      /* Table */
      .table thead { background-color: #343a40; color: #fff; }
      .badge { font-size: 0.85rem; }
  </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4>Foody Admin</h4>
    <a href="index.php" class="active"><i class="bi bi-speedometer2"></i> Dashboard</a>
    <a href="menu.php"><i class="bi bi-card-list"></i> Menu Items</a>
    <a href="orders.php"><i class="bi bi-cart-check"></i> Orders</a>
    <a href="offers.php"><i class="bi bi-tags"></i> Offers</a>
    <a href="users.php"><i class="bi bi-people"></i> Users</a>
    <a href="settings.php"><i class="bi bi-gear"></i> Settings</a>
    <a href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
</div>

<!-- Main Content Start -->
<div class="main-content">
