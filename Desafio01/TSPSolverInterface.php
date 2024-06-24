<?php

interface TSPSolverInterface {
    public function findShortestRoute(array $distMatrix): array;
}