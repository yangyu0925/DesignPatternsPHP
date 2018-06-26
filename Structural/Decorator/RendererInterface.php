<?php

// 先定义统一的接口，声明要动态添加新功能的类方法
interface RendererInterface
{
    public function renderData();
}