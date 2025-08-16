<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if($userObj->deleteUser($id)){
        header("Location: users.php?msg=User deleted successfully");
        exit;
    }else{
        echo "Error deleting user!";
    }
}else{
    echo "Invalid requst!";
}
?>