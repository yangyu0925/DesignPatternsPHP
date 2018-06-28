<?php

// 订单工厂类，根据状态不同分发到不同的行为对象中
class OrderFactory
{
    private function __construct()
    {
        throw new Exception('Can not instance the OrderFactory class!');
    }

    //根据状态的不同返回 CreateOrder 或 ShippingOrder 或不在指定状态抛出异常
    public static function getOrder($id)
    {
        $order = array(); // 从数据库读取订单信息;

        switch ($order['status']) {
            case 'created':
                return new CreateOrder($order);
            case 'shipping':
                return new ShippingOrder($order);
            default:
                throw new Exception('Order status error!');
                break;
        }
    }
}