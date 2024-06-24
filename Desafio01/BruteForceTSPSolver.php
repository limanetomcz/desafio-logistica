<?php

class BruteForceTSPSolver implements TSPSolverInterface {
    private $distMatrix;
    private $sizeMatrix;
    private $minPath = [];
    private $minDistance = PHP_INT_MAX;

    public function findShortestRoute(array $distMatrix): array {
        $this->distMatrix = $distMatrix;
        $this->sizeMatrix = count($distMatrix);
        $initialRoute = range(0, $this->sizeMatrix - 1);
        $this->permute($initialRoute, 0);
        return [$this->minPath, $this->minDistance];
    }

    private function permute($route, $start) {
        if ($start == $this->sizeMatrix - 1) {
            $distance = $this->calculateDistance($route);
            if ($distance < $this->minDistance) {
                $this->minDistance = $distance;
                $this->minPath = $route;
            }
            return;
        }

        for ($i = $start; $i < $this->sizeMatrix; $i++) {
            $route = $this->swap($route, $start, $i);
            $this->permute($route, $start + 1);
            $route = $this->swap($route, $start, $i);
        }
    }

    private function swap($route, $i, $j) {
        $temp = $route[$i];
        $route[$i] = $route[$j];
        $route[$j] = $temp;
        return $route;
    }

    private function calculateDistance($route) {
        $distance = 0;
        for ($i = 0; $i < $this->sizeMatrix - 1; $i++) {
            $distance += $this->distMatrix[$route[$i]][$route[$i + 1]];
        }
        $distance += $this->distMatrix[$route[$this->sizeMatrix - 1]][$route[0]]; 
        return $distance;
    }
}
