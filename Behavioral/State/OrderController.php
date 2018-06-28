<?php

// 订单控制器，统一的事务流程
class OrderController
{
    public function shipAction($id)
    {
        $order = OrderFactory::getOrder($id);
        try {
            $order->shipOrder();
        } catch (Exception $e) {
            //handle error!
        }
        // response to browser
    }

    public function completeAction($id)
    {
        $order = OrderFactory::getOrder($id);
        try {
            $order->completeOrder();
        } catch (Exception $e) {
            //handle error!
        }
        // response to browser
    }
}