<?php
namespace App;

class Item
{
    public float $weight;
    public int $quantity;
    public float $price;

    public function __construct(float $weight, int $quantity, float $price)
    {
        $this->weight = $weight;
        $this->quantity = $quantity;
        $this->price = $price;
    }
}