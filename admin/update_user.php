<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);

if($_SERVER['REQUEST_METHOD'] === "POST"){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $result = $userObj->updateUserByAdmin($id, $name, $email, $role);

    if($result){
        header("Location: users.php?msg=User Updated Successfully");
        exit;
   }else{
    echo "Error updating user!";
   }
}else{
    $id = $_GET['id'];
    $user = $userObj->get_UserById($id);
}
?>

<?php include 'includes/header.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class=" border-0 rounded-3">
                <div class="card-header text-dark text-center">
                    <h4>Update User</h4>
                </div>
                <div class="card-body">
                    <form method="POST" action="update_user.php">
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">

                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" value="<?= $user['username'] ?>" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="<?= $user['email'] ?>" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Role</label>
                            <input type="text" name="role" value="<?= $user['role'] ?>" class="form-control" required>
                        </div>

                        <div class="d-grid mb-2">
                            <button type="submit" class="btn btn-secondary btn-lg">Update User</button>
                        </div>

                        <div class="d-grid">
                            <a href="users.php" class="btn btn-outline-primary btn-lg">Back</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
