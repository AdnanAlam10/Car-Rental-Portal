<?php 
    require APPROOT . '/views/includes/head.php';

?>

<div class="container">
    <h2 class="sign-head">EDIT PROFILE</h2>
    <hr>
    <form action="<?php echo URLROOT; ?>/users/update" method="POST">
        <div class="input-field">
            <label for="">Username: </label>
            <input type="text" name="username" value="<?php echo $data['username'] ?>">
            <span class="invalidFeedback">
                <?php echo $data['usernameError'];?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Email Address: </label>
            <input type="email" name="email" value="<?php echo $data['email'] ?>">
            <span class="invalidFeedback">
                <?php echo $data['emailError'];?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Phone Number: </label>
            <input type="text" name="phoneNumber" value="<?php echo $data['phoneNumber'] ?>">
            <span class="invalidFeedback">
                <?php echo $data['phoneNumberError']; ?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Age: </label>
            <input type="number" name="age" value="<?php echo $data['age'] ?>">
            <span class="invalidFeedback">
                <?php echo $data['ageError']; ?>
            </span>
        </div>
        <button class="submit" type="submit" value="submit">Submit</button>
    </form>
</div>