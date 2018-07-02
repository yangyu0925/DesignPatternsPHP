<?php

// 对象集合类
class ObjectCollection
{
    private $elements;

    private $comparator;

    public function __construct(array $elements = array())
    {
        $this->elements = $elements;
    }

    // 设置策略
    public function setComparator(ComparatorInterface $comparator)
    {
        $this->comparator = $comparator;
    }

    public function sort()
    {
        if (!$this->comparator) {
            throw new Exception("Comparator is not set");
        }

        $callback = array($this->comparator, 'compare');
        uasort($this->elements, $callback); // 根据自定义函数排序

        return $this->elements;
    }

}