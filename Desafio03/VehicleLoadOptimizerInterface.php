<?php

interface VehicleLoadOptimizerInterface {
    public function maximizeLoad(array $products, int $maxCapacity): array;
}