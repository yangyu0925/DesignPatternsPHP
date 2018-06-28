<?php

// 合作者抽象类
abstract class Colleague
{
    private $mediator;

    // 中介者设计模式的关键： 合作者构造函数参数必须是中介者类型
    public function __construct(MediatorInterface $medium)
    {
        $this->mediator = $medium;
    }

    protected function getMediator()
    {
        return $this->mediator;
    }
}