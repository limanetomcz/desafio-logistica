<?php

class DynamicVehicleLoadOptimizer implements VehicleLoadOptimizerInterface  {
    public function maximizeLoad(array $products, int $maxVehicleCapacity): array {
        $countProducts = count($products);
        $vehicleLoadValues = array_fill(0, $countProducts + 1, array_fill(0, $maxVehicleCapacity + 1, 0));
    
        for ($i = 1; $i <= $countProducts; $i++) {
            for ($remainingVehicleCapacity = 1; $remainingVehicleCapacity <= $maxVehicleCapacity; $remainingVehicleCapacity++) {
                if ($products[$i - 1][1] <= $remainingVehicleCapacity) {
                    $vehicleLoadValues[$i][$remainingVehicleCapacity] = max($products[$i - 1][1] + $vehicleLoadValues[$i - 1][$remainingVehicleCapacity - $products[$i - 1][1]], $vehicleLoadValues[$i - 1][$remainingVehicleCapacity]);
                } else {
                    $vehicleLoadValues[$i][$remainingVehicleCapacity] = $vehicleLoadValues[$i - 1][$remainingVehicleCapacity];
                }
            }
        }
    
        $result = [];
        $remainingVehicleCapacity = $maxVehicleCapacity;
        for ($i = $countProducts; $i > 0 && $remainingVehicleCapacity > 0; $i--) {
            if ($vehicleLoadValues[$i][$remainingVehicleCapacity] != $vehicleLoadValues[$i - 1][$remainingVehicleCapacity]) {
                $result[] = $products[$i - 1];
                $remainingVehicleCapacity -= $products[$i - 1][1];
            }
        }
    
        return $result;
    }
    
}