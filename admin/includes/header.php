<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foody Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .sidebar {
            width: 220px;
            background-color: #212529;
            min-height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
        }
        .sidebar h4 {
            padding: 15px;
            color: white;
            margin: 0;
            text-align: center;
            background-color: #343a40;
        }
        .sidebar a {
            color: white;
            padding: 10px 15px;
            display: block;
            text-decoration: none;
        }
        .sidebar a:hover, .sidebar a.active {
            background-color: #495057;
        }
        .main-content {
            margin-left: 220px;
            padding: 20px;
            width: calc(100% - 220px);
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h4>Foody Admin</h4>
    <a href="index.php">📊 Dashboard</a>
    <a href="menu.php">🍔 Menu Items</a>
    <a href="orders.php">🛒 Orders</a>
    <a href="offers.php">🏷 Offers</a>
    <a href="users.php">👥 Users</a>
    <a href="settings.php">⚙ Settings</a>
    <a href="logout.php">🚪 Logout</a>
</div>

<!-- Main Content Start -->
<div class="main-content">
