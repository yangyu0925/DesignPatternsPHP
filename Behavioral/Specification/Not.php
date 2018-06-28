<?php

class Not extends AbstractSpecification
{
    protected $spec;

    // 创建一个新的规格封装了另外一个规格
    public function __construct(SpecificationInterface $spec)
    {
        $this->spec = $spec;
    }

    // 返回封装规格的取反结果
    public function isSatisfiedBy(Item $item)
    {
        return !$this->spec->isSatisfiedBy($item);
    }
}