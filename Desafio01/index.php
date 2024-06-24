<p>Desafio 1: Otimização de Rota de Entrega</p>
<p>Descrição Geral: Implemente uma função que calcule a rota de entrega mais curta para um veículo de entrega que deve passar por vários pontos de entrega e retornar ao ponto de origem. Use o algoritmo do caixeiro-viajante (Traveling Salesman Problem - TSP).</p>
<p>Requisitos Específicos:</p>
•	A função deve receber uma matriz de distâncias onde dist[i][j] representa a distância entre os pontos i e j.<br>
•	A função deve retornar a rota mais curta e a distância total.
<p>Exemplo de Entrada:</p>
<p>const distMatrix: number[][] = [
    [0, 10, 15, 20],
    [10, 0, 35, 25],
    [15, 35, 0, 30],
    [20, 25, 30, 0]
];</p>

<?php

require_once "TSPSolverInterface.php";
require_once "BruteForceTSPSolver.php";
require_once "TSPSolverFactory.php";


$distMatrix = [
    [0, 10, 15, 20],
    [10, 0, 35, 25],
    [15, 35, 0, 30],
    [20, 25, 30, 0]
];

$solver = TSPSolverFactory::createSolver();
list($route, $distance) = $solver->findShortestRoute($distMatrix);
echo "<hr><b>";
echo "Rota mais curta: " . implode(' -> ', $route) . " -> " . $route[0] . "\n";
echo "Distância total: " . $distance . "\n";
echo "</b>";