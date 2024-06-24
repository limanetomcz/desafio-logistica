<?php

class InventoryManager {
    private array $operations;

    public function __construct(array $operations) {
        $this->operations = $operations;
    }

    public function updateInventory(): array {
        $inventory = [];
        foreach ($this->operations as $operation) {
            $operation->execute($inventory);
        }
        return $inventory;
    }
}