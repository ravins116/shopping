<?php
namespace App;

class ShoppingCart
{
    private $items;

    function __construct()
    {
        $this->items = array();
    }

    function addItem($item)
    {
        $this->items[$item['id']] = $item;
    }

    function removeItem($itemId)
    {
        if (isset($this->items[$itemId])) {
            unset($this->items[$itemId]);
        }
    }

    function calculateTotal()
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item['price'];
        }
        echo "Total: $total";
    }

    function checkout()
    {
        $this->calculateTotal();
        $this->items = array();
    }
}

$cart = new ShoppingCart();

$cart->addItem(array('id' => 1, 'name' => 'Item 1', 'price' => 20.5));
$cart->addItem(array('id' => 2, 'name' => 'Item 2', 'price' => 10.0));

$cart->removeItem(2);
$cart->checkout();