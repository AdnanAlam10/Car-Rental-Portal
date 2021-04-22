<?php 
    require APPROOT . '/views/includes/head.php';

?>

<div class="container login">
    <h2 class="sign-head">LOGIN</h2>
    <hr>
    <form action="<?php echo URLROOT; ?>/users/login" method="POST">
        <div class="input-field">
            <label for="">Username: </label>
            <input type="text" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError'];?>
            </span>
        </div>
        <div class="input-field">
            <label for="">Password: </label>
            <input type="password" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>
        </div>
        <button class="submit" type="submit" value="submit">Submit</button>
    </form>