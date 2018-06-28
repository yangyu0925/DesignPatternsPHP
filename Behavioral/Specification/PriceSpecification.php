<?php

// 价格规格
class PriceSpecification extends AbstractSpecification
{
    protected $maxPrice;
    protected $minPrice;

    // 设置可选的最高价
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }


    // 设置可选的最低价
    public function setMinPrice($minPrice)
    {
        $this->minPrice = $minPrice;
    }

    // 检查价格是否在最大和最小之间
    public function isSatisfiedBy(Item $item)
    {
        if (!empty($this->maxPrice) && $item->getPrice() > $this->maxPrice) {
            return false;
        }
        if (!empty($this->minPrice) && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}