<?php

class DemandForecasterFactory {
    public static function createForecaster(int $windowSize = 3): DemandForecasterInterface {
        return new MovingAverageDemandForecaster($windowSize);
    }
}