<?php

class Either extends AbstractSpecification
{
    protected $left;
    protected $right;

    // 创建一个封装了两个规格组合的新规格
    public function __construct(SpecificationInterface $left, SpecificationInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    // 逻辑或是否成立
    public function isSatisfiedBy(Item $item)
    {
        return $this->left->isSatisfiedBy($item) || $this->right->isSatisfiedBy($item);
    }
}