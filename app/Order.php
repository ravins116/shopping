<?php
namespace App;

class Order
{ /** @var Item[] $items */
    private array $items;
    private float $weight = 0;
    private float $price = 0;
    private int $shipping = 5;
    /** 
     * @param Item[] 
     */
    public function __construct(array $items)
    {
        $this->items = $items;
        $this->calculateTotals();
    }

    public function price(): float 
    {
        return $this->price;
    }

    public function shippingPrice(): int 
    {
        return $this->shipping;
    }

    public function totalPrice(): float
    {
        return $this->price + $this->shipping;
    }

    private function calculateTotals(): void
    {
        foreach ($this->items as $item) {
            $this->weight += $item->weight * $item->quantity;
            $this->price += $item->price * $item->quantity;
        }
        $this->shipping = $this->shippingCost();
    }

    private function shippingCost(): int 
    {
        return ($this->weight < 1) ? 5 : (($this->weight < 5) ? 10 : (($this->weight < 20) ? 20 : 50));
    }
}