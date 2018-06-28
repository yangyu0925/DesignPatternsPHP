<?php

// 订单接口
interface OrderInterface
{
    public function shipOrder();

    public function completeOrder();
}