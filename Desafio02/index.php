<p>Desafio 2: Rastreamento de Inventário</p>
<p>Descrição Geral: Desenvolva uma função para gerenciar o inventário de um armazém. A função deve processar uma lista de operações de entrada e saída de produtos e retornar o inventário atualizado.</p>
<p>Requisitos Específicos:</p>
•	A função deve receber uma lista de operações, onde cada operação é uma tupla contendo o tipo de operação ("entrada" ou "saida"), o nome do produto e a quantidade.<br>
•	A função deve retornar um dicionário com o inventário atualizado.

<p>Exemplo de Entrada:</p>
<p>type Operacao = [string, string, number];</p>
<p>const operacoes: Operacao[] = [
    ["entrada", "item1", 50],
    ["saida", "item1", 20],
    ["entrada", "item2", 70]
];</p>

<?php

require_once "InventoryInterface.php";
require_once "InventoryEntry.php";
require_once "InventoryExit.php";
require_once "InventoryManager.php";

$operations = [
    new InventoryEntry("item1", 50),
    new InventoryExit("item1", 20),
    new InventoryEntry("item2", 70)
];

$inventoryManager = new InventoryManager($operations);
$updatedInventory = $inventoryManager->updateInventory();

echo "<hr><b>";
print_r($updatedInventory);