<?php

// 订单行为类 - 创建
class CreateOrder implements OrderInterface
{
    private $order;

    public function __construct(array $order)
    {
        if (empty($order)) {
            throw new \Exception('Order can not be empty!');
        }
        $this->order = $order;
    }

    public function shipOrder()
    {
        $this->order['status'] = 'shipping';
        $this->order['updatedTime'] = time();

        // 将新的订单状态保存到数据库中
        return $this->updateOrder($this->order);
    }

    public function completeOrder()
    {
        //订单创建状态不能算订单完成;
        throw new Exception('Can not complete the order which status is created!');
    }
}