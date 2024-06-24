<?php

class InventoryExit implements InventoryInterface {
    private string $product;
    private int $quantity;

    public function __construct(string $product, int $quantity) {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function execute(array &$inventory): void {
        if (!isset($inventory[$this->product])) {
            $inventory[$this->product] = 0;
        }
        $inventory[$this->product] -= $this->quantity;
    }
}