<?php
use PHPUnit\Framework\TestCase;
use App\Purchase\Item;
use App\Purchase\Order;

final class OrderTest extends TestCase
{
    public function testOrderProperties()
    {
        $item1 = new Item(0.5, 2, 10.0);
        $item2 = new Item(1.5, 3, 20.0);
        $order = new Order([$item1, $item2]);
        $this->assertEquals($order->price(), '80');
        $this->assertEquals($order->shippingPrice(), '20');
        $this->assertEquals($order->totalPrice(), '100');
    }
}