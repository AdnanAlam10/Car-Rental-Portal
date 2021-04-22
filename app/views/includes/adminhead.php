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
    <header>
        <img class="logo" src="<?php echo URLROOT; ?>/public/img/logo.png">
        <nav>
            <ul class="nav-links">
                <li><a href="<?php echo URLROOT; ?>/admins/users">Users</a></li>
                <li><a href="<?php echo URLROOT; ?>/admins/cars">Car Listing</a></li>
            </ul>
        </nav>
            <ul class="account-links">
                <a href="<?php echo URLROOT; ?>/admins/addcar"><button>Add Car</button></a>
                <a href="<?php echo URLROOT; ?>/users/logout"><button>Log out</button></a>
            </ul>
    </header>
</body>
</html>