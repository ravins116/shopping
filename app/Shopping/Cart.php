<?php
namespace App\Shopping;

class Cart
{
    /** @var Product[] $items */
    private array $items;

    public function __construct()
    {
        $this->items = [];
    }
    /**
     * @return Product[]
     */
    public function items(): array
    {
        return $this->items;
    }

    public function addItem(Product $item): void
    {
        $this->items[$item->id] = $item;
    }

    public function removeItem(int $itemId): void
    {
        if (isset($this->items[$itemId])) {
            unset($this->items[$itemId]);
        }
    }

    function calculateTotal(): float
    {
        $total = 0;
        foreach ($this->items as $item) {
            $total += $item->price;
        }
        return $total;
    }

    function checkout(): string
    {
        $total = $this->calculateTotal();
        $this->items = array();
        return 'Total: ' . $total;
    }
}