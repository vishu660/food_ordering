<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    $imageName = null;
    if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != ''){
        $uploadDir = __DIR__ . "/../uploads/"; // uploads root me hoga
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $target = $uploadDir . $imageName;
        move_uploaded_file($_FILES['image']['tmp_name'], $target);
    }

    $result = $userObj->updateItem($id, $name, $description, $price, $imageName);

    if($result){
        header("Location: menu.php?msg=Item updated successfully&type=success");
    }else{
        header("Location: menu.php?msg=Failed to update item&type=danger");
    }
    
} else {
    echo "Invalid Request!";
}
