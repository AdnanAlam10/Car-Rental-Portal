<?php 
    require APPROOT . '/views/includes/head.php';
?>

<div class="container cart">
    <h2 class="sign-head">CART</h2>
    <table>
        <thead>
            <tr>
                <th></th>
                <th>Vehicle</th>
                <th>Days</th>
                <th>Daily $</th>
                <th>Total $</th>
                <th></th>
            </tr>
        </thead>
        <?php foreach ($_SESSION['cart-items'] as $car): ?>
            <tbody>
                <tr>
                    <td>
                        <img src="<?php echo URLROOT; ?>/public/img/<?php echo $car['brand'] . " " . $car['model'] ?>.jpg" alt="" id="cart-image">
                    </td>
                    <td>
                        <div class="car-detail">
                            <h3><?php echo $car['brand'] . " " . $car['model']; ?></h3>
                            <p><span>Date From:</span> <?php echo $car['dateFrom']; ?></p>
                            <br>
                            <p><span>Date To:</span> <?php echo $car['dateTo']; ?></p>
                        </div>
                    </td>
                    <td>
                        <p><?php echo $car['days']; ?></p>
                    </td>
                    <td>
                        <p>$<?php echo $car['price']; ?></p>
                    </td>
                    <td>
                        <p>$<?php echo $car['total']; ?></p>
                    </td>
                    <td>
                        <form action="<?php echo URLROOT; ?>/cars/delete" method="POST">
                            <input type="hidden" value="<?php echo $car['id']; ?>" name="id">
                            <button type="submit" class="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        <?php endforeach; ?>
        
    </table>
</div>

