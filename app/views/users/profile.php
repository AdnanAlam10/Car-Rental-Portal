<?php 
    require APPROOT . '/views/includes/head.php';

?>

<div class="container">
    <h2 class='sign-head'>PROFILE</h2>
    <hr>
    <div class="profile-item">
        <h3>Username:</h3>
        <p><?php echo $data->username; ?></p>
    </div>
    <div class="profile-item">
        <h3>Email:</h3>
        <p><?php echo $data->email; ?></p>
    </div>
    <div class="profile-item">
        <h3>Phone Number:</h3>
        <p>+(880)<?php echo $data->phoneNumber; ?></p>
    </div>
    <div class="profile-item">
        <h3>Age:</h3>
        <p><?php echo $data->age; ?></p>
    </div>
    <a href="<?php echo URLROOT; ?>/users/update"><button class='submit'>Edit Profile</button></a>
</div>