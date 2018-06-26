<?php

interface Parameters
{
    // 获取参数
    public function get($key);

    // 设置参数
    public function set($key, $value);
}