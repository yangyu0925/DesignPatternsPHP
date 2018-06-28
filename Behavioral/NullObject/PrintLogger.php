<?php

// 普通logger实体类
class PrintLogger implements LoggerInterface
{
    public function log($str)
    {
        echo $str;
    }
}