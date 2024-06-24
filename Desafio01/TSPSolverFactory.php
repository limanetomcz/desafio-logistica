<?php

class TSPSolverFactory {
    public static function createSolver(): TSPSolverInterface {
        return new BruteForceTSPSolver();
    }
}
