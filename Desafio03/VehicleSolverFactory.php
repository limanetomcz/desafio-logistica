<?php

class VehicleSolverFactory {
    public static function createSolver(): VehicleLoadOptimizerInterface {
        // Podemos trocar a implementação aqui sem afetar o resto do código
        return new DynamicVehicleLoadOptimizer();
    }
}