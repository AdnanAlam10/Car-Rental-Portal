<?php 
    require APPROOT . '/views/includes/adminhead.php';
?>

<div class="container user">
    <h2 class="sign-head">USERS</h2>
    <?php foreach ($data['users'] as $user): ?>
        <div class="user-item">
            <p><span>Username: </span><?php echo $user->username; ?></p>
            <p><span>Email: </span><?php echo $user->email; ?></p>
            <p><span>Phone Number: </span>+(880)<?php echo $user->phoneNumber; ?></p>
            <p><span>Age:</span><?php echo $user->age; ?></p>
            <form action="<?php echo URLROOT; ?>/admins/deleteUser" method="POST">
                    <input type="hidden" value="<?php echo $user->id; ?>" name="id">
                    <button type="submit" class="delete">Delete</button>
            </form>
            <hr>
        </div>
    <?php endforeach; ?>
</div>

