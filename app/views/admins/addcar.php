<?php 
    require APPROOT . '/views/includes/adminhead.php';

?>

<div class="container car">
    <h2 class="sign-head">Add Car</h2>
    <hr>
    <form action="<?php echo URLROOT; ?>/admins/addcar" method="POST">
        <div class="input-field">
            <label for="">Brand: </label>
            <input type="text" name="brand">
        </div>
        <div class="input-field">
            <label for="">Model: </label>
            <input type="text" name="model">
        </div>
        <div class="input-field">
            <label for="">Type: </label>
            <input type="text" name="type">
        </div>
        <div class="input-field">
            <label for="">Transmisson: </label>
            <input type="text" name="transmission">
        </div>
        <div class="input-field">
            <label for="">Number of seats: </label>
            <input type="number" name="numberOfSeats">
        </div>
        <div class="input-field">
            <label for="">Price: </label>
            <input type="number" name="price">
        </div>
        <button class="submit" type="submit" value="submit">Submit</button>
    </form>