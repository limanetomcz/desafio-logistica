<p>Desafio 4: Alocação de Veículos</p>
<p>Descrição Geral: Desenvolva uma função para alocar veículos de entrega para diferentes pedidos de entrega, otimizando o uso dos veículos disponíveis.</p>
<p>Requisitos Específicos:</p>
•	A função deve receber uma lista de pedidos, onde cada pedido é uma tupla contendo o ID do pedido e o peso do pedido.<br>
•	A função deve receber uma lista de veículos, onde cada veículo é uma tupla contendo o ID do veículo e a sua capacidade máxima.<br>
•	A função deve retornar uma lista de alocações, onde cada alocação é uma tupla contendo o ID do veículo e uma lista de IDs dos pedidos alocados.<br>
<p>type Pedido = [string, number];</p>
<p>type Veiculo = [string, number];</p>
<p>const pedidos: Pedido[] = [
    ["pedido1", 10],
    ["pedido2", 20],
    ["pedido3", 30],
    ["pedido4", 40]
];</p>
<p>const veiculos: Veiculo[] = [
    ["veiculo1", 50],
    ["veiculo2", 60]
];</p>
<hr>

<?php

require_once "OrderAllocatorInterface.php";
require_once "OrderAllocatorFactory.php";
require_once "GreedyOrderAllocator.php";

$orders = [
    ["pedido1", 10],
    ["pedido2", 20],
    ["pedido3", 30],
    ["pedido4", 40]
];
$vehicles = [
    ["veiculo1", 50],
    ["veiculo2", 60]
];

$allocator = OrderAllocatorFactory::createAllocator();
$allocations = $allocator->allocateOrders($orders, $vehicles);

echo "Alocações: \n";
foreach ($allocations as $allocation) {
    echo "<b><br>" . $allocation[0] . ": " . implode(', ', $allocation[1]) . "\n";
}