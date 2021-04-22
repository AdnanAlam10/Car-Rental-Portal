<?php 
    require APPROOT . '/views/includes/adminhead.php';
?>

<div class="container user">
    <h2 class="sign-head">CARS</h2>
    <?php foreach ($data['cars'] as $car): ?>
        <div class="user-item">
            <p><span>Brand: </span><?php echo $car->brand; ?></p>
            <p><span>Model: </span><?php echo $car->model; ?></p>
            <p><span>Type: </span><?php echo $car->type; ?></p>
            <p><span>Transmission:</span><?php echo $car->transmission; ?></p>
            <p><span>Number of seats:</span><?php echo $car->numberOfSeats; ?></p>
            <p><span>Price:</span><?php echo $car->price; ?></p>
            <form action="<?php echo URLROOT; ?>/admins/deleteCar" method="POST">
                    <input type="hidden" value="<?php echo $car->id; ?>" name="id">
                    <button type="submit" class="delete">Delete</button>
            </form>
            <hr>
        </div>
    <?php endforeach; ?>
</div>

