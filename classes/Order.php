<?php

class Order{
    private $conn;

    public function __construct($db_connection){
        $this->conn = $db_connection;
    }

    public function getOrder(){
        $sql = "SELECT o.id, o.user_id, o.total_amount, o.discount_amount, o.final_amount, 
                       o.status, o.created_at, u.username as user_name 
                FROM orders o 
                JOIN users u ON o.user_id = u.id 
                ORDER BY o.created_at DESC";
    
        $result = $this->conn->query($sql);
        $orders = [];
        if($result && $result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $orders[] = $row;
            }
        }
        return $orders;
    }
    

    public function getOrderById($OrderId){
        $sql = "SELECT o.*, u.name as user.name FROM orders o JOIN users u ON o.user_id = u.id WHERE o.id = $OrderId";
        $orderResult = $this->conn->query($sql);
        $order = $orderResult->fetch_assoc();

        $sqlItems = "SELECT oi.quantity, oi.price, i.name, i.image FROM order_items oi JOIN items i ON oi.item_id = i.id WHERE oi.order_id = $OrderId";
        $itemResult = $this->conn->query($sqlItems);
        $items = [];
        if($itemResult->num_rows > 0){
            while($row = $itemResult->fetch_accos()){
                $items[] = $row;
            }
        }

        $order['item'] = $items;
        return $order;
    }

    // ====== Add to Cart ======
    public function addToCart($user_id, $item_id, $quantity = 1) {
        // Check if item already exists in cart
        $stmt = $this->conn->prepare("SELECT id, quantity FROM cart WHERE user_id = ? AND item_id = ?");
        $stmt->bind_param("ii", $user_id, $item_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows > 0) {
            // Update quantity
            $row = $result->fetch_assoc();
            $newQty = $row['quantity'] + $quantity;
            $stmt = $this->conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
            $stmt->bind_param("ii", $newQty, $row['id']);
            return $stmt->execute();
        } else {
            // Insert new item
            $stmt = $this->conn->prepare("INSERT INTO cart (user_id, item_id, quantity) VALUES (?, ?, ?)");
            $stmt->bind_param("iii", $user_id, $item_id, $quantity);
            return $stmt->execute();
        }
    }

    // ====== Get Cart Items ======
    public function getCart($user_id) {
        $sql = "SELECT c.id as cart_id, c.quantity, i.id as item_id, i.name, i.price, i.image
                FROM cart c
                JOIN items i ON c.item_id = i.id
                WHERE c.user_id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $cart = [];
        while($row = $result->fetch_assoc()) {
            $row['subtotal'] = $row['price'] * $row['quantity'];
            $cart[] = $row;
        }
        return $cart;
    }

    // ====== Update Cart Quantity ======
    public function updateCart($cart_id, $quantity) {
        $stmt = $this->conn->prepare("UPDATE cart SET quantity = ? WHERE id = ?");
        $stmt->bind_param("ii", $quantity, $cart_id);
        return $stmt->execute();
    }

    // ====== Remove Item from Cart ======
    public function removeFromCart($cart_id) {
        $stmt = $this->conn->prepare("DELETE FROM cart WHERE id = ?");
        $stmt->bind_param("i", $cart_id);
        return $stmt->execute();
    }

    // ====== Place Order ======
    public function placeOrder($user_id) {
        $cartItems = $this->getCart($user_id);
        if(empty($cartItems)) return false;

        $total = 0;
        foreach($cartItems as $item) {
            $total += $item['subtotal'];
        }

        $discount = 0; // yaha discount logic add kar sakte ho
        $finalAmount = $total - $discount;

        // Insert into orders
        $stmt = $this->conn->prepare("INSERT INTO orders (user_id, total_amount, discount_amount, final_amount, status) VALUES (?, ?, ?, ?, 'pending')");
        $stmt->bind_param("iddd", $user_id, $total, $discount, $finalAmount);
        $stmt->execute();
        $order_id = $stmt->insert_id;

        // Insert order items
        $stmtItem = $this->conn->prepare("INSERT INTO order_items (order_id, item_id, quantity, price) VALUES (?, ?, ?, ?)");
        foreach($cartItems as $item) {
            $stmtItem->bind_param("iiid", $order_id, $item['item_id'], $item['quantity'], $item['price']);
            $stmtItem->execute();
        }

        // Clear cart
        $stmtClear = $this->conn->prepare("DELETE FROM cart WHERE user_id = ?");
        $stmtClear->bind_param("i", $user_id);
        $stmtClear->execute();

        return $order_id;
    }
}