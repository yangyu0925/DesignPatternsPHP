<?php

class Plus extends AbstractSpecification
{
    protected $left;
    protected $right;

    // 创建两个规格的和逻辑
    public function __construct(SpecificationInterface $left, SpecificationInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    // 检查规格的组合AND逻辑是否通过
    public function isSatisfiedBy(Item $item)
    {
        return $this->left->isSatisfiedBy($item) && $this->right->isSatisfiedBy($item);
    }
}