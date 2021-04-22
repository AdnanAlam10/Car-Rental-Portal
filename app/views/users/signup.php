<?php 
    require APPROOT . '/views/includes/head.php';

?>

<div class="container">
    <h2 class="sign-head">Signup</h2>
    <hr>
    <form action="<?php echo URLROOT; ?>/users/signup" method="POST">
        <div class="input-field">
            <label for="">Username: </label>
            <input type="text" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError'];?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Email Address: </label>
            <input type="email" name="email">
            <span class="invalidFeedback">
                <?php echo $data['emailError'];?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Phone Number: </label>
            <input type="text" name="phoneNumber">
            <span class="invalidFeedback">
                <?php echo $data['phoneNumberError']; ?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Age: </label>
            <input type="number" name="age">
            <span class="invalidFeedback">
                <?php echo $data['ageError']; ?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Password: </label>
            <input type="password" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Repeat Password: </label>
            <input type="password" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>
        </div>
        <button class="submit" type="submit" value="submit">Submit</button>
    </form>
</div>