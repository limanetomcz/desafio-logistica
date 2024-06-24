<?php

class MovingAverageDemandForecaster implements DemandForecasterInterface {
    private $windowSize;

    public function __construct(int $windowSize = 3) {
        $this->windowSize = $windowSize;
    }

    public function forecastDemand(array $historicalData): float {
        $total = 0;
        $count = 0;
        $dataCount = count($historicalData);

        for ($i = $dataCount - $this->windowSize; $i < $dataCount; $i++) {
            if ($i >= 0) {
                $total += $historicalData[$i][1];
                $count++;
            }
        }

        return $count ? $total / $count : 0.0;
    }
}
