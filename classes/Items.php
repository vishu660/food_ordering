<?php
class Items{

private $conn;

public function __construct($conn)
{
    $this->conn = $conn;
}

public function addMenuItem($data, $file){
    $name = mysqli_real_escape_string($this->conn, $data['name']);
    $description = mysqli_real_escape_string($this->conn, $data['description']);
    $price = mysqli_real_escape_string($this->conn, $data['price']);

    $imageName = null;

    // ✅ File upload check
    if (isset($file) && isset($file['name']) && !empty($file['name'])) {
        $uploadDir = __DIR__ . "/../uploads/"; // absolute path safe hota hai
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true); // agar uploads folder nahi hai to bana lo
        }
        $imageName = time() . '_' . basename($file['name']);
        $targetFile = $uploadDir . $imageName;

        if (!move_uploaded_file($file['tmp_name'], $targetFile)) {
            return false; // agar upload fail ho jaye
        }
    }

    $sql = "INSERT INTO items (name, description, price, image, created_at)
            VALUES ('$name', '$description', '$price', '$imageName', NOW())";

    return mysqli_query($this->conn, $sql);
}

public function getAllMenuItems(){
    $sql = "SELECT * FROM items ORDER BY id DESC";
    $result = $this->conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}


public function getMenu(){
    $sql = "SELECT * FROM items ORDER BY id DESC";
    $result = mysqli_query($this->conn, $sql);
    $menu = [];
    while ($row = mysqli_fetch_assoc($result)){
        $menu[] = $row;
    }
    return $menu;
}

public function getMenuItemById($id){
    $sql = "SELECT * FROM items WHERE id = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
public function updateItem($id, $name, $description, $price, $imageName = null){
    // Agar image upload hui hai to image bhi update karo
    if($imageName){
        $sql = "UPDATE items 
                SET name = ?, description = ?, price = ?, image = ? 
                WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssdsi", $name, $description, $price, $imageName, $id);
    } else {
        // Agar image update nahi karni hai
        $sql = "UPDATE items 
                SET name = ?, description = ?, price = ? 
                WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssdi", $name, $description, $price, $id);
    }

    return $stmt->execute();
}

public function deleteItem($id){
    $stmt = $this->conn->prepare("DELETE FROM items WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
}
