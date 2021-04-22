<?php 
    require APPROOT . '/views/includes/head.php';

?>

<h2 class="sign-head">CAR LISTING</h2>
<div class="car-container">
    <?php foreach($data['cars'] as $car) :?>
    <div class="car-item">
        <img src="<?php echo URLROOT; ?>/public/img/<?php echo $car->brand . " ". $car->model ?>.jpg" alt="">
        <div class="car-info">
            <p>
                <span>Brand: </span><?php echo $car->brand; ?>
            </p>
            <p>
                <span>Model: </span><?php echo $car->model; ?>
            </p>
            <p>
                <span>Type: </span><?php echo $car->type; ?>
            </p>
            <p>
                <span>Transmission: </span><?php echo $car->transmission; ?>
            </p>
            <p>
                <span>Number of Seats: </span><?php echo $car->numberOfSeats; ?>
            </p>
            <p>
                <span>Price per day: </span>$<?php echo $car->price; ?>
            </p>
            <form action="<?php echo URLROOT; ?>/cars/cart" method="POST">
                <p>
                    <span>Date from: </span><input id="date_from" name="date_from" type="date">
                </p>
                <p>
                    <span>Date To: </span><input id="date_to" name="date_to" type="date">
                </p>
                <input type="hidden" name="id" value="<?php echo $car->id; ?>">
                <input type="hidden" name="price" value="<?php echo $car->price; ?>">
                <button class='submit'>Add to Cart</button>
            </form>
        </div>
    </div>
    <hr>
    <?php endforeach;?>
</div>