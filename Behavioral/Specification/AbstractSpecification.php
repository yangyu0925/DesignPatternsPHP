<?php

// 规格抽象类
abstract class AbstractSpecification implements SpecificationInterface
{
    // 检查给定的item是否满足所有条件
    abstract public function isSatisfiedBy(Item $item);

    public function plus(SpecificationInterface $spec)
    {
        return new Plus($this, $spec);
    }

    public function either(SpecificationInterface $spec)
    {
        return new Either($this, $spec);
    }

    public function not()
    {
        return new Not($this);
    }
}