<?php

abstract class AbstractConfig
{
    // 用于保存数据
    protected $storage;

    public function __construct($storage)
    {
        $this->storage = $storage;
    }
}