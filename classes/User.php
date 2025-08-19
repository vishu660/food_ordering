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
    
}



