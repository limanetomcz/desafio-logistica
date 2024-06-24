<?php

class OptimalOrderAllocator implements OrderAllocatorInterface {
    public function allocateOrders(array $orders, array $vehicles): array {
        usort($orders, function ($a, $b) {
            return $b[1] <=> $a[1];
        });

        usort($vehicles, function ($a, $b) {
            return $b[1] <=> $a[1];
        });

        $allocations = [];
        foreach ($vehicles as $vehicle) {
            $vehicleId = $vehicle[0];
            $capacity = $vehicle[1];
            $allocatedOrders = [];
            foreach ($orders as $key => $order) {
                if ($order[1] <= $capacity) {
                    $allocatedOrders[] = $order[0];
                    $capacity -= $order[1];
                    unset($orders[$key]);
                }
            }
            $allocations[] = [$vehicleId, $allocatedOrders];
        }
        return $allocations;
    }
}