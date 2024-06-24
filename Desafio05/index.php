<p>Desafio 5: Previsão de Demanda</p>
<p>Descrição Geral: Implemente uma função para prever a demanda futura de produtos com base em dados históricos de vendas.</p>
<p>Requisitos Específicos:</p>
•	A função deve receber uma lista de dados históricos de vendas, onde cada item é uma tupla contendo a data e a quantidade vendida.<br>
•	A função deve retornar a previsão de demanda para o próximo período.<br>

<p>Exemplo de Entrada:</p>
<p>type HistoricoVenda = [string, number];</p>
<p>const dadosHistoricos: HistoricoVenda[] = [
    ["2024-01-01", 100],
    ["2024-02-01", 150],
    ["2024-03-01", 200]
];</p>
<hr>

<?php

require_once "DemandForecasterFactory.php";
require_once "DemandForecasterInterface.php";
require_once "MovingAverageDemandForecaster.php";

$historicalData = [
    ["2024-01-01", 100],
    ["2024-02-01", 150],
    ["2024-03-01", 200]
];

$forecaster = DemandForecasterFactory::createForecaster(3);
$forecast = $forecaster->forecastDemand($historicalData);

echo "<b>Previsão de demanda para o próximo período: " . $forecast . "\n";
