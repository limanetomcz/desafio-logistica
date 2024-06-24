<?php

interface OrderAllocatorInterface {
    public function allocateOrders(array $orders, array $vehicles): array;
}