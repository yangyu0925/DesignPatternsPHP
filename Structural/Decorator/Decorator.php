<?php

// 抽象装饰器类必须和Webservice一样实现RendererInterface 接口类；
// 这是装饰器模式和封装器区别的关键所在(PHP适配器设计模式)
abstract class Decorator implements RendererInterface
{
    protected $wrapped;

    // 必须指定参数类型为RendererInterface以确保在子类中可以调用renderData();
    public function __construct(RendererInterface $wrappable)
    {
        $this->wrapped = $wrappable;
    }
}