<?php

interface SpecificationInterface
{
    // 该方法根据给定对象是否满足这个规格来返回true 或 false。
    public function isSatisfiedBy(Item $item);

    // 创建规格的AND 和逻辑
    public function plus(SpecificationInterface $spec);

    // 创建规格的OR 或逻辑
    public function either(SpecificationInterface $spec);

    // 创建规格的Not 非逻辑
    public function not();
}