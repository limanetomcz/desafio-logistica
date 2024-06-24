<?php

interface DemandForecasterInterface {
    public function forecastDemand(array $historicalData): float;
}