<?php
require_once 'includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <?php init_page(); ?>
</head>

<body>
    <h1>Checkout Page</h1>

    <form action="process_order.php" method="post">
        <button type="submit" data-rustalytics="submitted-order-variation-1">Place Order</button>
    </form>
</body>

</html>