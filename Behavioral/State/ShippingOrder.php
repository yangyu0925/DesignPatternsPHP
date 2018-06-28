<?php

// 订单行为类 - 配送
class ShippingOrder implements OrderInterface
{
    private $order;

    public function __construct(array $order)
    {
        if (empty($order)) {
            throw new Exception('Order can not be empty!');
        }
        $this->order = $order;
    }

    public function shipOrder()
    {
        //正在配送的订单不能再配送;
        throw new Exception('Can not ship the order which status is shipping!');
    }

    // 订单完成
    public function completeOrder()
    {
        $this->order['status'] = 'completed';
        $this->order['updatedTime'] = time();

        // 保存状态到数据库
        return $this->updateOrder($order);
    }
}