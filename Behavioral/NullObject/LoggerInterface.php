<?php

// 关键点: NullLogger 必须像其他 Loggers类一样继承这个接口
interface LoggerInterface
{
    public function log($str);
}