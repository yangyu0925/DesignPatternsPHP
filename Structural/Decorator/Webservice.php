<?php

// Websercie 类，接收原始数据，后面的类给该类对象实例提供新的功能
class Webservice implements RendererInterface
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function renderData()
    {
        return $this->data;
    }
}