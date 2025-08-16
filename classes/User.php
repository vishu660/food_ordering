<?php
class User  
{
    private $conn;

    public function __construct($db_connection)
    {
        $this->conn = $db_connection;
    }

    public function get_UserById($id) {
        $id = (int)$id;
        $sql = "SELECT * FROM users WHERE id = $id LIMIT 1";
        $result = mysqli_query($this->conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_assoc($result);
        }
        return null;
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users ORDER BY id DESC";
        $result = mysqli_query($this->conn, $sql);
        $users = [];
        while ($row = mysqli_fetch_assoc($result)){
            $users[] = $row;
        }
        return $users;
    }

    public function addUser($data){
        $name  = mysqli_real_escape_string($this->conn, $data['name']);
        $email = mysqli_real_escape_string($this->conn, $data['email']);
        $password = mysqli_real_escape_string($this->conn, $data['password']);
        $role  = mysqli_real_escape_string($this->conn, $data['role']);

        // Hash password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (username, email, password, role, created_at)
                VALUES ('$name', '$email', '$hashedPassword', '$role', NOW())";

        return mysqli_query($this->conn, $sql);
    }

    public function updateUserProfile($id, $name, $email, $password = null){
        if ($password) {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
            $sql = "UPDATE users SET username = ?, email = ?, password = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sssi", $name, $email, $hashedPassword, $id);
        } else {
            $sql = "UPDATE users SET username = ?, email = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssi", $name, $email, $id);
        }
        return $stmt->execute();
    }

    public function updateUserByAdmin($id, $name, $email, $role){
        $sql = "UPDATE users SET username = ?, email = ?, role = ? WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssi", $name, $email, $role, $id);
        return $stmt->execute();
    }
    
    

    public function deleteUser($id){
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function logout() {
        session_start();
        $_SESSION = [];
        session_destroy();
        header("Location: login.php");
        exit;
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
    
        $sql = "INSERT INTO menu_items (name, description, price, image, created_at)
                VALUES ('$name', '$description', '$price', '$imageName', NOW())";
    
        return mysqli_query($this->conn, $sql);
    }

    public function getAllMenuItems(){
        $sql = "SELECT * FROM menu_items ORDER BY id DESC";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    

    public function getMenu(){
        $sql = "SELECT * FROM menu_items ORDER BY id DESC";
        $result = mysqli_query($this->conn, $sql);
        $menu = [];
        while ($row = mysqli_fetch_assoc($result)){
            $menu[] = $row;
        }
        return $menu;
    }

    public function getMenuItemById($id){
        $sql = "SELECT * FROM menu_items WHERE id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
    public function updateItem($id, $name, $description, $price, $imageName = null){
        // Agar image upload hui hai to image bhi update karo
        if($imageName){
            $sql = "UPDATE menu_items 
                    SET name = ?, description = ?, price = ?, image = ? 
                    WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssdsi", $name, $description, $price, $imageName, $id);
        } else {
            // Agar image update nahi karni hai
            $sql = "UPDATE menu_items 
                    SET name = ?, description = ?, price = ? 
                    WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssdi", $name, $description, $price, $id);
        }
    
        return $stmt->execute();
    }

    public function deleteItem($id){
        $stmt = $this->conn->prepare("DELETE FROM menu_items WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
    
}