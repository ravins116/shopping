<?php
use PHPUnit\Framework\TestCase;
use App\Shopping\Cart;
use App\Shopping\Product;

final class ShoppingCartTest extends TestCase
{
    public function testShippingCart()
    {
        $cart = new Cart();
        $item1 = new Product(1, 'Item 1', 20.5);
        $item2 = new Product(2, 'Item 2', 10.0);
        $cart->addItem($item1);
        $this->assertEquals($cart->calculateTotal(), '20.5');
        $cart->addItem($item2);
        $this->assertEquals($cart->calculateTotal(), '30.5');
        $cart->removeItem(3);
        $this->assertEquals($cart->calculateTotal(), '30.5');
        $cart->removeItem(1);
        $this->assertEquals($cart->calculateTotal(), '10.0');
        $this->assertEquals($cart->checkout(), 'Total: 10');
        $this->assertEquals($cart->items(), []);
    }
}