<?php
include '../includes/config.php';
require '../classes/User.php';

$userObj = new User($conn);
$users = $userObj->getAllUsers();
?>

<?php include 'includes/header.php'; ?>
<h2 class="mb-4">Manage Users</h2>
<table class="table table-bordered table-striped">
    <thead class="table-dark">
        <tr>
            <th>User ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Role</th>
            <th>Joined On</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($users)) {?>
            <?php foreach($users as $user) {?>
                <tr>
                    <td><?php echo $user['id']?></td>
                    <td><?php echo $user['username']?></td>
                    <td><?php echo $user['email']?></td>
                    <td><?php echo $user['role']?></td>
                    <td><?php echo date("d-m-Y", strtotime($user['created_at']));?></td>
                    <td>
                    <a href="update_user.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="delete_user.php?id=<?= $user['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</a>  
                    </td>
                </tr>
            <?php } ?>
        <?php }else { ?>

            <tr>
                <td colspan="6" class="text-center">No users found</td>
            </tr>

        <?php } ?>
    </tbody>
</table>
<?php include 'includes/footer.php'; ?>
