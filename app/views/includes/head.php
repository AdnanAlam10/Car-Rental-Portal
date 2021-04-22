<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/reset.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <title><?php echo SITENAME; ?></title>
</head>
<body>
    <header>
        <img class="logo" src="<?php echo URLROOT; ?>/public/img/logo.png">
        <nav>
            <ul class="nav-links">
                <li><a href="<?php echo URLROOT; ?>/index">Home</a></li>
                <li><a href="<?php echo URLROOT; ?>/pages/about">About</a></li>
                <li><a href="<?php echo URLROOT; ?>/cars">Car Listing</a></li>
                <li><a href="<?php echo URLROOT; ?>/pages/contact">Contact</a></li>
                <?php if (isset($_SESSION['user_id'])) : ?> 
                <li><a href="<?php echo URLROOT; ?>/cars/cart">Cart</a></li>
                <?php endif; ?>
            </ul>
        </nav>
            <ul class="account-links">
                <?php if(isset($_SESSION['user_id'])) : ?>
                    <a href="<?php echo URLROOT; ?>/users/profile"><button>Profile</button></a>
                    <a href="<?php echo URLROOT; ?>/users/logout"><button>Log out</button></a>
                <?php else : ?>
                    <a href="<?php echo URLROOT; ?>/users/signup"><button>Sign Up</button></a>
                    <a href="<?php echo URLROOT; ?>/users/login"><button>Login</button></a>
                <?php endif; ?>
            </ul>
    </header>
</body>
</html>