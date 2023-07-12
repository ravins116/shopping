<?php
use PHPUnit\Framework\TestCase;
use App\Shopping\Cart;
use App\Shopping\Product;

final class ShoppingCartTest extends TestCase
{
    public function testEmptyCart()
    {
        $cart = new Cart();
        $items = $cart->items();
        $this->assertEmpty($items);
    }

    public function testAddItem()
    {
        $cart = new Cart();
        $item = new Product(1, 'Item 2', 10.0);
        $cart->addItem($item);
        $items = $cart->items();
        $this->assertCount(1, $items);
        $this->assertSame($item, $items[1]);
    }

    public function testRemoveItem()
    {
        $cart = new Cart();
        $item = new Product(5, 'Item 1', 10.0);
        $cart->addItem($item);
        $cart->removeItem(5);
        $items = $cart->items();
        $this->assertEmpty($items);
    }

    public function testCalculateTotal()
    {
        $cart = new Cart();
        $product1 = new Product(1, 'Product A', 10.0);
        $product2 = new Product(2, 'Product B', 20.0);
        $cart->addItem($product1);
        $cart->addItem($product2);
        $total = $cart->calculateTotal();
        $this->assertEquals(30.0, $total);
    }

    public function testCheckout()
    {
        $cart = new Cart();
        $item1 = new Product(1, 'Item 1', 20.5);
        $item2 = new Product(2, 'Item 2', 10.0);
        $cart->addItem($item1);
        $cart->addItem($item2);
        $checkoutResult = $cart->checkout();
        $items = $cart->items();
        $this->assertEmpty($items);
        $this->assertEquals('Total: 30.5', $checkoutResult);
    }
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