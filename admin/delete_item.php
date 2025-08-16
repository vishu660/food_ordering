<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

if(isset($_GET['id'])){
    $id = $_GET['id'];

    if($userObj->deleteItem($id)){
        header("Location: menu.php?msg=Item delete successfully");
        exit;
    }else{
        echo "faild to deleted item!";
    }
}else{
    echo "Invaid request!";
}
?>