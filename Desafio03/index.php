<p>Desafio 3: Planejamento de Carga de Veículos</p>
<p>Descrição Geral: Implemente uma função que determine a melhor forma de carregar um veículo com uma capacidade máxima, otimizando a quantidade de produtos carregados.</p>
<p>Requisitos Específicos:</p>
•	A função deve receber uma lista de produtos, onde cada produto é uma tupla contendo o nome do produto e o seu peso.<br>
•	A função deve receber a capacidade máxima do veículo.<br>
•	A função deve retornar uma lista de produtos que maximizam o peso carregado sem exceder a capacidade do veículo.<br>

<p>type Produto = [string, number];</p>
<p>const produtos: Produto[] = [
    ["produto1", 10],
    ["produto2", 20],
    ["produto3", 30],
    ["produto4", 40]
];</p>
<p>const capacidadeMaxima: number = 50;</p>
<hr>
<?php

require_once "VehicleLoadOptimizerInterface.php";
require_once "DynamicVehicleLoadOptimizer.php";
require_once "VehicleSolverFactory.php";

$products = [
    ["produto1", 10],
    ["produto2", 20],
    ["produto3", 30],
    ["produto4", 40]
];
$maxCapacity = 50;

$solver = VehicleSolverFactory::createSolver();
$optimalLoad = $solver->maximizeLoad($products, $maxCapacity);

echo "<b>Produtos carregados: \n";
foreach ($optimalLoad as $product) {
    echo "<b>" . $product[0] . " - " . $product[1] . " kg\n";
}