<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Cart.php';

use App\Shopping\Product;
use App\Shopping\Cart;

$cart = new Cart();
$item1 = new Product(1, 'Item 1', 20.5);
$item2 = new Product(2, 'Item 2', 10.0);
$cart->addItem($item1);
$cart->addItem($item2);
?>
<p>
    <?= $cart->checkout(); ?>
</p>