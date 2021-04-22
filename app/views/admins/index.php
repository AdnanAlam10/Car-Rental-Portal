
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/reset.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <title>Admin</title>
</head>
<body>
        <div class="container login">
            <h2 class="sign-head">ADMIN LOGIN</h2>
            <hr>
            <form action="<?php echo URLROOT; ?>/admins/login" method="POST">
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
    
</body>
</html>