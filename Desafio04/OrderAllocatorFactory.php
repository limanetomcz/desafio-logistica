<?php

class OrderAllocatorFactory {
    public static function createAllocator(): OrderAllocatorInterface {
        return new OptimalOrderAllocator();
    }
}