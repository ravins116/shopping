<?php
require_once __DIR__ . '/Item.php';
require_once __DIR__ . '/Order.php';
use App\Item;
use App\Order;

$item1 = new Item(0.5, 2, 10.0);
$item2 = new Item(1.5, 3, 20.0);

$order = new Order([$item1, $item2]);
?>
<p>Your shipping cost is
    <?= $order->shippingPrice(); ?>
</p>
<p>Your order total is
    <?= $order->price(); ?>
</p>
<p>Your total cost with shipping is
    <?= $order->totalPrice(); ?>
</p>