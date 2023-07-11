<?php
use PHPUnit\Framework\TestCase;
use App\ShippingCost;
final class ShippingCostTest extends TestCase {
    public function testShippingInitalizedWithHello() {
       $cost = new ShippingCost;
        $this->assertEquals($cost->hello(), 'Hello');    
    }
}