<?php
use PHPUnit\Framework\TestCase;
use App\Item;
final class ItemTest extends TestCase {
    public function testItemProperties() {
       $item = new Item(0.5, 2, 10.0);
        
        $this->assertEquals(0.5, $item->weight);
        $this->assertEquals(2, $item->quantity);
        $this->assertEquals(10.0, $item->price);  
    }
}